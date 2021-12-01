<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTaxAmountToUserInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_invoices', function (Blueprint $table) {
            $table->decimal('tax_amount',8,2)->default(0)->after('rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_invoices', function (Blueprint $table) {
            $table->dropColumn('tax_amount');
        });
    }
}
