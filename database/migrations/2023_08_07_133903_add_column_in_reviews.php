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
        Schema::table('reviews', function (Blueprint $table) {
            $table->boolean('seen')->default(false);
            $table->unsignedBigInteger('review_id')->nullable();
            $table->foreignIdFor(OrderItem::class)->nullable()->constrained('order_items')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn([
                'seen',
                'order_item_id',
                'review_id',
            ]);
        });
    }
};
