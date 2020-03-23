<?php

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
    		$table->integer('user_id')->comment('用户的id');
    		$table->text('contens')->comment('评论内容');
    		$table->integer('pid')->comment('父级评论的id;0代表的是评论大于0是回复')->default('0');
    		$table->integer('post_id')->comment('文章id');
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
        Schema::drop('comments');
    }
}
