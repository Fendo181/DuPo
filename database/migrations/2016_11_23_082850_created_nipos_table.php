<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedNiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  ここではやりたい事を記述する。
    public function up()
    {
        Schema::create('nipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    // ここではやり直したい事を記述する。
    public function down()
    {
        Schema::dropIfExists('nipos');
    }
}
