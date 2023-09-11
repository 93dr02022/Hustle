<?php

namespace App\Jobs\Main\Seller;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\UploadedFile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Filters\WatermarkFactory;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class WatermarkVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 0;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public string $storePath, public ?string $filename)
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tempPath = "temps/{$this->filename}";
        Storage::disk('s3')->copy($this->storePath, $tempPath);

        FFMpeg::fromDisk('s3')
            ->open($tempPath)
            ->addWatermark(function (WatermarkFactory $watermark) {
                $watermark->fromDisk('s3')
                    ->open('general/hustle.png')
                    ->right(100)
                    ->bottom(150);
            })
            ->resize(640, 400)
            ->export()
            ->toDisk('s3')
            ->inFormat(new \FFMpeg\Format\Video\X264)
            ->save($this->storePath);

        Storage::disk('s3')->delete($tempPath);
        FFMpeg::cleanupTemporaryFiles();
    }
}
