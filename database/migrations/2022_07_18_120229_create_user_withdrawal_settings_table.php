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
        Schema::create('user_withdrawal_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->string('personal_acct_number', 10)->nullable(); // account number
            $table->string('personal_bank_name')->nullable()->index();
            $table->string('personal_account_name')->nullable()->index();
            $table->string('personal_bank_code')->nullable()->index();
            $table->string('personal_transfer_recipient')->index();

            $table->string('business_acct_number', 10)->nullable(); // account number
            $table->string('business_bank_name')->nullable()->index();
            $table->string('business_account_name')->nullable()->index();
            $table->string('business_bank_code')->nullable()->index();
            $table->string('business_transfer_recipient')->index();

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
        Schema::dropIfExists('user_withdrawal_settings');
    }
};
