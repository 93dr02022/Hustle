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
        Schema::table('user_notification_settings', function (Blueprint $table) {
            $table->string('notification_token')->nullable()->change();
            $table->string('app_token')->nullable()->after('notification_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_notification_settings', function (Blueprint $table) {
            $table->dropColumn('app_token');
            $table->string('notification_token')->change();
        });
    }
};
