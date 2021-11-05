<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserAvatars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_avatars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('location');
            $table->string('uuid');
            $table->string('storage');
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_avatars');
    }
}
