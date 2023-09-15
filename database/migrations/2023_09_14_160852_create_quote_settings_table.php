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
        Schema::create('quote_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('logo')->nullable();
            $table->string('business_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->mediumText('address')->nullable();
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
        Schema::dropIfExists('quote_settings');
    }
};
