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
        Schema::create('gig_documents', function (Blueprint $table) {
            $table->id();
            $table->string('uid', 255)->unique();
            $table->foreignId('gig_id')->constrained();
            $table->mediumText('name', 100)->nullable();
            $table->string('size', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gig_documents');
    }
};
