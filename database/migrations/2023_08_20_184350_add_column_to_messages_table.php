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
        Schema::table('ch_messages', function (Blueprint $table) {
            $table->foreignId('custom_offer_id')->nullable()->index()->after('quotation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ch_messages', function (Blueprint $table) {
            $table->dropColumn('custom_offer_id');
        });
    }
};
