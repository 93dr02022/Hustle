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
        Schema::table('projects_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('ogimage_id')->nullable()->after('seo_description');
            $table->foreign('ogimage_id')->references('id')->on('file_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_categories', function (Blueprint $table) {
            $table->dropForeign('projects_categories_ogimage_id_foreign');
            $table->dropColumn('ogimage_id');
        });
    }
};
