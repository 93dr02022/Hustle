<?php

use App\Models\User;
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
        Schema::create('user_notification_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete();
            $table->string('notification_token');
            $table->boolean('push_inbox_notifications')->default(false);
            $table->boolean('push_order_notifications')->default(false);
            $table->boolean('push_marketing_notifications')->default(false);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('push_notification_id');
            $table->dropColumn('push_order_updates');
            $table->dropColumn('push_inbox_messages');
            $table->dropColumn('push_marketing_notifications');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_notification_settings');
    }
};
