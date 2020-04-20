<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ToolsC4 extends Migration
{
    public function up()
    {
                // Schema::dropIfExists('tools');

        Schema::create('tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('toolnumber')->nullable();
            $table->string('toolmaker')->nullable();
            $table->string('suppliercode')->nullable();
            $table->string('status')->nullable();
            $table->string('remark')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tools');
    }
}

