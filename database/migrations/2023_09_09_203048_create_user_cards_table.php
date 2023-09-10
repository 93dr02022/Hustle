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
        Schema::create('user_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('authorization_code')->index();
            $table->string('email')->index();
            $table->string('card_type');
            $table->string('exp_month');
            $table->string('exp_year');
            $table->string('bin');
            $table->string('last');
            $table->string('bank');
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
        Schema::dropIfExists('user_cards');
    }
};
