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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('payment_method')->index();
            $table->string('phone_number')->index();
            $table->string('firt_name')->index();
            $table->string('last_name')->index();
            $table->string('email')->index();
            $table->dateTime('quote_date')->index();
            $table->string('reference')->unique();
            $table->string('sharing_uid')->unique();
            $table->boolean('is_draft')->index()->default(false);
            $table->boolean('paid')->index();
            $table->decimal('total')->index();
            $table->dateTime('expires_at')->index();
            $table->decimal('total_discount')->index();
            $table->decimal('total_tax')->index();
            $table->decimal('total_quantity')->index();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('quotations');
    }
};
