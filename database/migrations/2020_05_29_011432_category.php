<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');

        // Schema::create('categories', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->integer('pid');//父类id
        //     $table->unsignedInteger('code')->nullable();//分类编号
        //     $table->string('name');//分类名
        //     $table->unsignedInteger('status')->nullable();//active or in active
        //     $table->string('operator')->nullable();//;            
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');

    }
}
