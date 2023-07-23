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
            $table->string('business_name')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_phone')->nullable();
            $table->string('registration_number')->nullable();

            $table->boolean('has_personal')->default(false);
            $table->boolean('has_business')->default(false);
            $table->mediumText('file_selfie')->nullable();
            $table->string('registration_file')->nullable();
            $table->enum('business_verify_status', ['pending', 'awaiting', 'verified', 'declined'])->default('pending');
            $table->enum('photo_status', ['pending', 'awaiting', 'verified', 'declined'])->default('pending');
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
