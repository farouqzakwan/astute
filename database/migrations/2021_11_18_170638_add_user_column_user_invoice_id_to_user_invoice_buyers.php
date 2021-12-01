<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserColumnUserInvoiceIdToUserInvoiceBuyers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_invoice_buyers', function (Blueprint $table) {
            $table->integer('user_invoice_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_invoice_buyers', function (Blueprint $table) {
            $table->dropColumn('user_invoice_id');
        });
    }
}
