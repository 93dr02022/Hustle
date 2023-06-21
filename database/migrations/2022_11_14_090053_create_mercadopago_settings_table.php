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
        Schema::create('mercadopago_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->default('Mercadopago');
            $table->boolean('is_enabled')->default(false);
            $table->string('logo_id')->nullable();
            $table->string('currency', 20)->default('ARS');
            $table->decimal('exchange_rate')->default(1);
            $table->integer('deposit_fee')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mercadopago_settings');
    }
};
