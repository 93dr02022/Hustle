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
        Schema::create('custom_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gig_id')->constrained();
            $table->foreignId('owner_id')->index();
            $table->foreignId('user_id')->index();
            $table->string('uid')->index();
            $table->mediumText('description');
            $table->decimal('offer_amount', 12)->index();
            $table->integer('delivery_time')->index();
            $table->enum('offer_status', ['accepted', 'withdrawn', 'rejected']);
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
        Schema::dropIfExists('custom_offers');
    }
};
