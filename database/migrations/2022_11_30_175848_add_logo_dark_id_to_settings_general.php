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
        Schema::table('settings_general', function (Blueprint $table) {
            $table->unsignedBigInteger('logo_dark_id')->nullable()->after('logo_id');
            $table->foreign('logo_dark_id')->references('id')->on('file_manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings_general', function (Blueprint $table) {
            $table->dropForeign('settings_general_logo_dark_id_foreign');
            $table->dropColumn('logo_dark_id');
        });
    }
};
