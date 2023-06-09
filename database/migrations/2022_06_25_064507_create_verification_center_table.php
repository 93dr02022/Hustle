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
        Schema::create('verification_center', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 20)->unique();
            $table->foreignId('user_id')->unique()->constrained();
            $table->enum('document_type', ['bvn', 'id', 'driver_license', 'passport']);
            $table->mediumText('file_front_side')->nullable();
            $table->mediumText('file_back_side')->nullable();
            $table->mediumText('file_selfie');
            $table->enum('status', ['pending', 'verified', 'declined'])->default('pending');
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('declined_at')->nullable();

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
        Schema::dropIfExists('verification_center');
    }
};
