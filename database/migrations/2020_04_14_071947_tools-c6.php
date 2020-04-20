<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToolsC6 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tools');
        // Schema::create('tools', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('toolnumber')->nullable();//模具编号
        //     $table->string('toolmaker')->nullable();//模具制造商
        //     $table->string('suppliercode')->nullable();//供应商编号
        //     $table->string('status')->nullable();//模具状况
        //     $table->string('remark')->nullable();//备注消息
        //     $table->rememberToken();
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
        Schema::dropIfExists('tools');
    }
}
