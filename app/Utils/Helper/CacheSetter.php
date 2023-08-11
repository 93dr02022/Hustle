<?php

namespace App\Utils\Helper;

use App\Models\Category;
use App\Models\Project;
use App\Models\State;
use Illuminate\Support\Facades\Cache;

final class CacheSetter
{
    /**
     * Popular tags cache
     */
    public static function popularTag($purge = null)
    {
        if ($purge) {
            Cache::forget('tags_cache');
        } else {
            return Cache::rememberForever('tags_cache', function () {
                return Category::whereHas('gigs')
                    ->withCount('gigs')
                    ->take(4)
                    ->orderBy('gigs_count')
                    ->get();
            });
        }
    }

    /**
     * Home page random category setter
     */
    public static function randomHomeCategory($purge = null)
    {
        if ($purge) {
            Cache::forget('random_gigs_cache');
        } else {
            return Cache::rememberForever('random_gigs_cache', function () {
                $categories = Category::where('is_visible', true)
                    ->inRandomOrder()
                    ->take(5)
                    ->get();

                $categories->each(function ($category) {
                    $category->gigs = $category->gigs()
                        ->whereIn('status', ['active', 'boosted', 'trending', 'featured'])
                        ->whereNull('deleted_at')
                        ->inRandomOrder()
                        ->limit(4)
                        ->with('owner')
                        ->get();
                });

                return $categories;
            });
        }
    }

    /**
     * Home page projects list
     */
    public static function homeProjects($purge = null)
    {
        if ($purge) {
            Cache::forget('home_projects_cache');
        } else {
            return Cache::rememberForever('home_projects_cache', function () {
                return Project::whereIn('status', ['completed', 'active'])->take(10)->get();
            });
        }
    }

    /**
     * Home page random category setter
     */
    public static function navbarCategory($purge = null)
    {
        if ($purge) {
            Cache::forget('navbar_category_cache');
        } else {
            return Cache::rememberForever('navbar_category_cache', function () {
                return Category::with('subcategories')->get();
            });
        }
    }

    /**
     * Home page random category slide
     */
    public static function mainCategory($purge = null)
    {
        if ($purge) {
            Cache::forget('main_category_cache');
        } else {
            return Cache::rememberForever('main_category_cache', function () {
                return Category::all();
            });
        }
    }

    /**
     * Home page random category slide
     */
    public static function nigerianStates($purge = null)
    {
        if ($purge) {
            Cache::forget('nigerian_states');
        } else {
            return Cache::rememberForever('nigerian_states', function () {
                return State::where('country_id', 160)->get();
            });
        }
    }
}
