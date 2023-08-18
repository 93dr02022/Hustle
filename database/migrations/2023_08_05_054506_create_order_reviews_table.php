<?php

use App\Models\OrderItem;
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
        Schema::table('order_item_work', function (Blueprint $table) {
            $table->longText('review_description')->nullable();
            $table->boolean('is_delivered')->default(false);
            $table->boolean('resubmit')->default(false);
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropColumn('review_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_item_work', function (Blueprint $table) {
            $table->dropColumn(['review_description','is_delivered','resubmit']);
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->longText('review_description')->nullable();
        });
    }
};
