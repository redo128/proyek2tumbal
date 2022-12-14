<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogaudityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logaudity', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');;
            $table->unsignedBigInteger('label_id')->nullable();
            $table->foreign('label_id')->references('id')->on('label')->onDelete('cascade');;
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');;
            $table->integer('harga');
            $table->integer('hargabaru');
            $table->string('namaorang');
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
        Schema::dropIfExists('logaudity');
    }
}