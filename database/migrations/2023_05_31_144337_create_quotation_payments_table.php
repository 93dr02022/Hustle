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
        Schema::create('quotation_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quotation_id')->constrained();
            $table->string('payment_method')->index();
            $table->string('payment_id')->index();
            $table->decimal('paid_amount', 16)->index();
            $table->string('status')->index(); // paid | pending | failed
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
        Schema::dropIfExists('quotation_payments');
    }
};
