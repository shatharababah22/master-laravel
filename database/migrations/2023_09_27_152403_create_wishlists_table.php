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
    public function up(): void
    {
        Schema::dropIfExists('wishlists');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        


        Schema::disableForeignKeyConstraints();

        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('id')->on('users');
            $table->string('WishlistName');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }
};
