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
        Schema::dropIfExists('payments');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
         
        
            $table->bigInteger('Amount');
            $table->date('PaymentDate');
            $table->string('Status');
            $table->timestamps();
        });
       
    }
};
