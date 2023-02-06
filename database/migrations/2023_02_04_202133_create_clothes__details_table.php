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
        Schema::create('clothes__details', function (Blueprint $table) {
            $table->id()->primary();
            $table->integer('clothes_id');
            $table->string('size');
            $table->string('color');
            
            //外部キー制約
             $table->foreign('clothes_id')
                  ->references('id')
                  ->on('clothes')
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
        Schema::dropIfExists('clothes__details');
    }
};
