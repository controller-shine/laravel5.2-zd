<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Cate;
//使用类
//前台管理员控制器
class fuwuController extends Controller
{
    //首页

    public function fuwu(){
        
		//读取列表的内容
		$cates = Cate::where('path','0,10')->orderBy('id','asc')->get();		//读取文章的内容
		//显示文章的内容
		$posts = Post::where('cate_id','15')->orderBy('id','')->paginate(5);
		//加载页面
        return view("home.fuwu",['cates'=>$cates,'posts'=>$posts]);

    }

    //添加页面    admin/admin/create  get

    public function create(){

    }

    //插入操作    admin/admin post

    public function store(){

    }


    //修改页面    admin/admin/{admin}/edit get

    public function edit(){

    }

    //更新操作    admin/admin/{admin}  put

    public function update(){

    }

    //删除操作     admin/admin/{admin}   delete

    public function destroy(){

    }

}
