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
        Schema::disableForeignKeyConstraints();

        Schema::create('recyclings', function (Blueprint $table) {
            $table->id();
            $table->string('types');
            $table->bigInteger('Amount');
            $table->bigInteger('phone');
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('id')->on('users');
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
