<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('propertyType')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('unitType')->nullable();
            $table->string('area')->nullable();
            $table->string('price')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('about')->nullable();
            $table->string('furnishing')->nullable();
            $table->string('balconies')->nullable();
            $table->string('parking')->nullable();
            $table->string('lock')->nullable();
            $table->string('cafeteria')->nullable();
            $table->string('posted_by')->nullable();
            $table->integer('uid')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
