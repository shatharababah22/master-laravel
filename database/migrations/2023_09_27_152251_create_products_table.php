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

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string('image2')->nullable();
            $table->string('Name');
            $table->bigInteger('Price');
          
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->text('description');
            $table->bigInteger('Stockquantity')->nullable();
            $table->string('MADEFROM')->nullable();
            $table->string('Brand')->nullable();
            $table->bigInteger('ItemId')->nullable();
            $table->string('NOTES')->nullable();
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('CategoryID');
            $table->foreign('CategoryID')->references('id')->on('categories');
            
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
        Schema::dropIfExists('products');
    }
};
