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
        Schema::create('user_withdrawal_history', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 50)->unique();
            $table->foreignId('user_id')->constrained();
            $table->enum('account_type', ['personal', 'business']);
            $table->string('account_number', 10);
            $table->string('amount', 20);
            $table->string('transfer_recipient')->index();
            $table->string('transfer_code')->nullable()->index();
            $table->decimal('fee')->nullable();
            $table->enum('status', ['pending', 'paid', 'rejected', 'declined'])->default('pending');
            $table->dateTime('paid_at')->nullable()->index();
            $table->dateTime('failed_at')->nullable()->index();
            $table->dateTime('reversed_at')->nullable()->index();

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
        Schema::dropIfExists('user_withdrawal_history');
    }
};
