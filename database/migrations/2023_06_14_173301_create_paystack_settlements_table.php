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
        Schema::create('paystack_settlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->index();
            $table->string('status')->index();
            $table->decimal('amount', 16)->index();
            $table->string('reference')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paystack_settlements');
    }
};
