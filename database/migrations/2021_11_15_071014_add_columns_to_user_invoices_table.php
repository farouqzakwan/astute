<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_invoices', function (Blueprint $table) {
            $table->integer('user_invoice_tax_id')->nullable(true);
            $table->string('tax_name')->nullable(true);
            $table->decimal('rate',8,2)->nullable(true);
            $table->integer('currency_id')->nullable(true);
            $table->double('subtotal')->nullable(true);
            $table->double('total');
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
            $table->dropColumn('user_invoice_tax_id');
            $table->dropColumn('tax_name');
            $table->dropColumn('rate');
            $table->dropColumn('currency_id');
            $table->dropColumn('subtotal');
            $table->dropColumn('total');
        });
    }
}
