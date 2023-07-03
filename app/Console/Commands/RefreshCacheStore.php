<?php

namespace App\Console\Commands;

use App\Utils\Helper\CacheSetter;
use Illuminate\Console\Command;

class RefreshCacheStore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        CacheSetter::popularTag(true);
        CacheSetter::popularTag();

        CacheSetter::randomHomeCategory(true);
        CacheSetter::randomHomeCategory();

        CacheSetter::homeProjects(true);
        CacheSetter::homeProjects();

        CacheSetter::navbarCategory(true);
        CacheSetter::navbarCategory();

        CacheSetter::mainCategory(true);
        CacheSetter::mainCategory();
    }
}
