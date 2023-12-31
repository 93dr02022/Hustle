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
        Schema::create('projects_skills', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->string('name', 30)->index();
            $table->string('slug', 100)->index();
            $table->unsignedBigInteger('category_id')->index();

            $table->foreign('category_id')->references('id')->on('projects_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_skills');
    }
};
