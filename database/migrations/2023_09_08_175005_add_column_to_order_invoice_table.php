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
        Schema::table('order_invoice', function (Blueprint $table) {
            $table->decimal('buyer_ref_amount', 12)->default(0)->after('amount_paid')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_invoice', function (Blueprint $table) {
            $table->dropColumn('buyer_ref_amount');
        });
    }
};
