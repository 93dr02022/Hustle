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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->string('pid', 6);
            $table->foreignId('user_id')->constrained();
            $table->string('title', 100)->index();
            $table->string('slug', 160);
            $table->longText('description');
            $table->foreignId('category_id')->constrained('projects_categories');
            $table->integer('budget_min');
            $table->integer('budget_max');

            $table->enum('budget_type', ['fixed', 'hourly'])->default('fixed');
            $table->integer('duration');
            $table->enum('status', ['pending_approval', 'pending_payment', 'active', 'completed', 'hidden', 'rejected', 'under_development', 'pending_final_review', 'incomplete', 'closed'])->default('pending_approval');

            $table->text('rejection_reason')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_urgent')->default(false);
            $table->boolean('is_highlighted')->default(false);
            $table->boolean('is_alert')->default(false);

            $table->timestamp('expiry_date_featured')->nullable();
            $table->timestamp('expiry_date_urgent')->nullable();
            $table->timestamp('expiry_date_highlight')->nullable();
            $table->bigInteger('counter_views')->default(0);
            $table->bigInteger('counter_impressions')->default(0);
            $table->bigInteger('counter_bids')->default(0);
            $table->timestamp('expiry_date')->nullable();

            $table->foreignId('awarded_bid_id')->nullable()->index();
            $table->foreignId('awarded_freelancer_id')->nullable()->index();

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
        Schema::dropIfExists('projects');
    }
};
