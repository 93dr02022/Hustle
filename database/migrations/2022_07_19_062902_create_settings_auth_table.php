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
        Schema::create('settings_auth', function (Blueprint $table) {
            $table->id();
            $table->boolean('verification_required')->default(true);
            $table->enum('verification_type', ['admin', 'email'])->default('email');
            $table->integer('verification_expiry_period')->default(60);
            $table->integer('password_reset_expiry_period')->default(60);
            $table->string('auth_img_id')->nullable();
            $table->boolean('is_facebook_login')->default(true);
            $table->boolean('is_google_login')->default(true);
            $table->boolean('is_twitter_login')->default(true);
            $table->boolean('is_github_login')->default(true);
            $table->boolean('is_linkedin_login')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_auth');
    }
};
