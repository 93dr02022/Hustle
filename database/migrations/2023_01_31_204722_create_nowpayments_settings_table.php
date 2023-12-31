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
        Schema::create('nowpayments_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->default('Bitcoin');
            $table->boolean('is_enabled')->default(false);
            $table->unsignedBigInteger('logo_id')->index()->nullable();
            $table->string('currency', 3)->default('USD');
            $table->string('crypto_currency', 3)->default('btc');
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
        Schema::dropIfExists('nowpayments_settings');
    }
};
