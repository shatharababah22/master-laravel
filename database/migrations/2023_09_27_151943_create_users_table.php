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
        Schema::create('users', function (Blueprint $table) {
            
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
     
            $table->rememberToken();
      
            $table->id();
            $table->string('name');
         
            $table->string('password');
            $table->string('Firstname')->nullable();
            $table->string('Lastname')->nullable();
            $table->bigInteger('Phone')->nullable();
            $table->string('Image')->nullable();
            $table->date('Birthday')->nullable();
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
        Schema::dropIfExists('users');
    }
};
