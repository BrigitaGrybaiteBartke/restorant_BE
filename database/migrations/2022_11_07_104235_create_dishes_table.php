<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price');
            $table->string('image');
            $table->unsignedBigInteger('restaurants_id')->nullable;
            // $table->foreign('restaurants_id')->nullable()->references('id')->on('restaurants')
            $table->foreign('restaurants_id')->references('id')->on('restaurants')
                ->onDelete('cascade')
                ->onUpdate('restrict');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('dishes');
    }
};
