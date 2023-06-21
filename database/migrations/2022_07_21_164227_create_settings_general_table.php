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
        Schema::create('settings_general', function (Blueprint $table) {
            $table->id();
            $table->string('title', 60)->default('Riverr');
            $table->string('subtitle', 120)->default('Freelance Services Marketplace');
            $table->string('separator', 5)->default('|');

            $table->string('logo_id')->nullable();
            $table->string('logo_dark_id')->nullable();
            $table->string('favicon_id')->nullable();

            $table->text('header_announce_text')->nullable();
            $table->text('header_announce_link')->nullable();
            $table->boolean('is_language_switcher')->default(true);
            $table->string('default_language', 2)->default('en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_general');
    }
};
