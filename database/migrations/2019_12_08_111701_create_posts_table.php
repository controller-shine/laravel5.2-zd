<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
    		$table->string('title')->comment('文章标题');
    		$table->text('content')->comment('文章内容');
    		$table->integer('user_id')->comment('作者的id');
    		$table->integer('cate_id')->comment('分类id');
    		$table->string('img')->comment('文章主图');
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
        Schema::drop('posts');
    }
}
