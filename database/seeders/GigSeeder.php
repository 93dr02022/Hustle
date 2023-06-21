<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gig;
use App\Models\GigDocument;
use App\Models\GigFaq;
use App\Models\GigImage;
use App\Models\GigRequirement;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::where('account_type', 'seller')->get()
            ->each(function ($user) {
                $title = fake()->realText(25);
                $uid = uid();

                $category = Category::inRandomOrder()->first();
                $subCategory = Subcategory::where('parent_id', $category->id)->first();

                $gig = Gig::create([
                    'uid' => $uid,
                    'user_id' => $user->id,
                    'title' => $title,
                    'slug' => substr(Str::slug($title), 0, 138) . '-' . $uid,
                    'description' => fake()->realText(300),
                    'price' => fake()->randomElement([10000, 12000, 14000, 11000, 25000, 28000, 16000]),
                    'delivery_time' => fake()->randomElement([5, 2, 4, 1, 6, 7]),
                    'category_id' => $category->id,
                    'subcategory_id' => $subCategory->id,
                    'image_thumb_id' => 'gigs/previews/small/1465EF358EF648B1C01A9ECD6.webp',
                    'image_medium_id' => 'gigs/previews/medium/9BB2FE59ACBCDF5FD342CD436.webp',
                    'image_large_id' => 'gigs/previews/large/71E450DBFFE4ACAE781786718.webp',
                    'status' => 'active',
                    'has_upgrades' => false,
                    'has_faqs' => false,
                    'video_link' => null,
                    'video_id' => null,
                ]);

                collect()->times(5)->each(function ($t) use ($gig) {
                    GigFaq::create([
                        'gig_id' => $gig->id,
                        'question' => fake()->realText(50),
                        'answer' => fake()->realText(50),
                    ]);
                });

                GigRequirement::create([
                    'gig_id' => $gig->id,
                    'question' => fake()->realText(50),
                    'type' => 'text',
                    'is_required' => false,
                    'is_multiple' => false,
                ]);

                collect()->times(5)->each(function ($t) use ($gig) {
                    GigImage::create([
                        'gig_id' => $gig->id,
                        'img_thumb_id' => 'gigs/gallery/small/4503132F4D9885AD8AFDC2141.webp',
                        'img_medium_id' => 'gigs/gallery/medium/84C6D42A6B9DC0A3BA59D1911.webp',
                        'img_large_id' => 'gigs/gallery/large/D36FE127E7CB3A3ED8CC5DCD7.webp',
                    ]);
                });

                $docsName = uid() . 'pdf';

                GigDocument::create([
                    'uid' => 'gigs/documents/' . $docsName,
                    'gig_id' => $gig->id,
                    'name' => $docsName,
                    'size' => '74894',
                ]);
            });
    }
}
