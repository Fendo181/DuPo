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
            // １行コメント
            $table->string('body');
            // コメントをpostに対して紐付けたい
            $table->string('post_id')->unsigned();
            $table->timestamps();

            //外部キーを創って、niposテーブルと紐付ける。

            $table->foreign('post_id') ## commentsのpost_id
                  ->references('id') ## postsのid
                  ->on('posts') ## 上のidのtableはposts
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
