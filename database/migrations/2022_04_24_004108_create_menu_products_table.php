<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// This page was created automatically when making the new table in laravel cmd and is for the menu products Database
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_products', function (Blueprint $table) {
            // I have added the fields which will be in my menu page below accordingly depending on whether they are Strings/Ints and whether they can remain empty or not when entering/addind data to the database.
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('menu_products');
    }
};
