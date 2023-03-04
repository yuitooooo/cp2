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
        Schema::create('clothes_post', function (Blueprint $table) {
            $table->primary(['clothes_id', 'post_id']);  
            $table->unsignedBigInteger('clothes_id');
            $table->string('post_id');
            
            //外部キー制約
            $table->foreign('clothes_id')
                  ->references('id')
                  ->on('clothes')
                  ->onDelete('cascade');
                  
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts')
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
        Schema::dropIfExists('clothes__posts');
    }
};
