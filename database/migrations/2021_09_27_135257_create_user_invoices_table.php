<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

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

            $table->string('invoice_number')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('payment_due')->nullable();
            
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_invoices');
    }
}
