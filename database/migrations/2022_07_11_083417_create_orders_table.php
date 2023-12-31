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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->foreignId('buyer_id')->nullable()->constrained('users');
            $table->string('total_value', 20);
            $table->string('subtotal_value', 20);
            $table->string('taxes_value', 20)->default(0);
            $table->boolean('is_finished')->default(false);
            $table->timestamp('placed_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
