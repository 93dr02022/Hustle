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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->unsignedBigInteger('user_id'); // Buyer info
            $table->unsignedBigInteger('seller_id'); //seller info
            $table->unsignedBigInteger('gig_id');
            $table->integer('rating');
            $table->text('message')->nullable();
            $table->enum('status', ['active', 'hidden'])->default('active');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('gig_id')->references('id')->on('gigs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
