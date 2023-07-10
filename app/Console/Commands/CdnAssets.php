<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CdnAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cdn:push';

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
        Storage::disk('s3')->deleteDirectory('public/css');
        Storage::disk('s3')->deleteDirectory('public/js');

        $this->info("destination directory cleaned.");

        $folders = collect(['css', 'css/chatify', 'js', 'js/chatify']);

        $folders->each(function ($folderPath) {
            $publicFolderPath = public_path($folderPath);

            $s3DestinationPath = "public/{$folderPath}/";

            $files = File::files($publicFolderPath);

            foreach ($files as $file) {
                $relativePath = $file->getRelativePathname();
                $destinationPath = $s3DestinationPath . $relativePath;
                Storage::disk('s3')->put($destinationPath, File::get($file));

                $this->line("destination: $destinationPath");
            }
        });

        $this->info('Assets in public/css and public/js copied successfully.');
    }
}
