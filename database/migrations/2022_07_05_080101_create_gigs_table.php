<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->foreignId('user_id')->constrained();

            $table->string('title', 100)->index('title');
            $table->string('slug', 160)->index('slug');
            $table->longText('description');
            $table->string('price', 10);
            $table->integer('delivery_time');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('subcategory_id')->constrained();

            $table->mediumText('image_thumb_id')->nullable();
            $table->mediumText('image_medium_id')->nullable();
            $table->mediumText('image_large_id')->nullable();

            $table->enum('status', ['pending', 'active', 'deleted', 'boosted', 'trending', 'featured'])->default('pending');
            $table->mediumInteger('counter_visits')->default(0);
            $table->mediumInteger('counter_impressions')->default(0);
            $table->mediumInteger('counter_sales')->default(0);
            $table->mediumInteger('counter_reviews')->default(0);

            $table->string('rating', 5)->default(0);
            $table->integer('orders_in_queue')->default(0);
            $table->boolean('has_upgrades')->default(0);
            $table->boolean('has_faqs')->default(0);
            $table->string('video_link', 60)->nullable();
            $table->string('video_id', 20)->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gigs');
    }
};
