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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cat')->unsigned();
            $table->bigInteger('id_user_target')->unsigned();
            $table->bigInteger('id_user_pengirim')->unsigned();
            $table->string('message');
            $table->string('file_name');
            $table->foreign('id_cat')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user_target')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user_pengirim')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
};
