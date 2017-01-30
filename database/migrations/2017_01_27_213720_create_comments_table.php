<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('post_id')->unsigned(); # これだとエラーが起きる
            $table->integer('nipo_id')->unsigned(); # マイナスは大丈夫とする。
            $table->string('name');
            $table->string('body');
            $table->timestamps();

            //外部キーを創って、niposテーブルと紐付ける。

            $table->foreign('nipo_id') ## commentsのpost_id
                  ->references('id') ## niposのid
                  ->on('nipos') ## 上のidのtableはniposs
                  ->onDelete('cascade'); ## これでその投稿が消えたら、こちらのtableも消えるようにした。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
