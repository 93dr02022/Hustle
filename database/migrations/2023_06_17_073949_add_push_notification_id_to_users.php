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
        Schema::table('users', function (Blueprint $table) {
            $table->string('push_notification_id')->nullable();
            $table->boolean('push_order_updates')->default(true);
            $table->boolean('push_inbox_messages')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('push_notification_id');
            $table->dropColumn('push_order_updates');
            $table->dropColumn('push_inbox_messages');
        });
    }
};
