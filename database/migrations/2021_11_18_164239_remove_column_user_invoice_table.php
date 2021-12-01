<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnUserInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_invoices',function(Blueprint $table){
            $table->dropColumn('issuer_name');
            $table->dropColumn('issuer_address1');
            $table->dropColumn('issuer_address2');
            $table->dropColumn('issuer_city');
            $table->dropColumn('issuer_state');
            $table->dropColumn('issuer_postcode');
            $table->dropColumn('issuer_country');
            $table->dropColumn('issuer_logo');
            $table->dropColumn('receiver_name');
            $table->dropColumn('receiver_address1');
            $table->dropColumn('receiver_address2');
            $table->dropColumn('receiver_city');
            $table->dropColumn('receiver_state');
            $table->dropColumn('receiver_postcode');
            $table->dropColumn('receiver_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_invoice',function(Blueprint $table){
            $table->string('issuer_name')->nullable();
            $table->string('issuer_address1')->nullable();
            $table->string('issuer_address2')->nullable();
            $table->string('issuer_city')->nullable();
            $table->string('issuer_state')->nullable();
            $table->string('issuer_postcode')->nullable();
            $table->string('issuer_country')->nullable();
            $table->string('issuer_logo')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string('receiver_address1')->nullable();
            $table->string('receiver_address2')->nullable();
            $table->string('receiver_city')->nullable();
            $table->string('receiver_state')->nullable();
            $table->string('receiver_postcode')->nullable(); 
            $table->string('receiver_country')->nullable(); 
        });
    }
}
