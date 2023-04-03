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
        Schema::create('clothes', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('gender_id');
            $table->string('name');
            $table->integer('number');
            $table->integer('price');
            $table->float('customer_rate');
            $table->string('url');
            
            //外部キー制約
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
                  
            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
};
