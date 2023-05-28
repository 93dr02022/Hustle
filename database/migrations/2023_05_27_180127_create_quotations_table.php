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
            $table->string('phone_number')->index();
            $table->string('firt_name')->index();
            $table->string('last_name')->index();
            $table->string('email')->index();
            $table->dateTime('quote_date')->index();
            $table->string('reference')->index();
            $table->boolean('is_draft')->index();
            $table->decimal('total')->index();
            $table->decimal('total_discount')->index();
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
