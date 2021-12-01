<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemsDescriptionToNullableToUserInvoiceItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_invoice_items', function (Blueprint $table) {
            $table->string('item')->nullable(true)->change();
            $table->string('description')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_invoice_items', function (Blueprint $table) {
            $table->string('item')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
        });
    }
}
