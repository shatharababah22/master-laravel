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

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OrderID');
            $table->foreign('OrderID')->references('id')->on('orders');
            $table->unsignedBigInteger('PaymentMethodID');
            $table->foreign('PaymentMethodID')->references('id')->on('payment_methods');
            $table->bigInteger('Amount');
            $table->date('PaymentDate');
            $table->string('Status');
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
        Schema::dropIfExists('payments');
    }
};
