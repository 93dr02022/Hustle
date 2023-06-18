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
            $table->string('gateway_provider_name', 20)->default('offline');
            $table->string('gateway_provider_id', 10);
            $table->string('amount', 20);
            $table->string('transfer_code')->index();
            $table->decimal('fee')->nullable();
            $table->enum('status', ['pending', 'paid', 'rejected'])->default('pending');
            $table->timestamp('created_at');
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
