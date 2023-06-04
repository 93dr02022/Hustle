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
        Schema::create('quotation_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('quotation_id')->constrained()->cascadeOnDelete();
            $table->string('description', 1000)->index();
            $table->integer('quantity')->index();
            $table->decimal('price')->index();
            $table->decimal('tax_rates')->index();
            $table->decimal('taxed_price')->index();
            $table->decimal('total_price')->index();
            $table->decimal('discount')->index();
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
        Schema::dropIfExists('quotation_items');
    }
};
