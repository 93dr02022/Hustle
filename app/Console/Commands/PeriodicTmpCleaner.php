<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class PeriodicTmpCleaner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tmp:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fileList = Storage::disk('local')->allFiles('tmp');

        collect($fileList)->each(function ($file) {
            $modificationTime = Storage::disk('local')->lastModified($file);

            $currentTime = now()->timestamp;
            $timeDifference = $currentTime - $modificationTime;

            if ($timeDifference > 21600) {
                Storage::disk('local')->delete($file);
            }
        });
    }
}
