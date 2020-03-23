<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
//使用类
//后台管理员控制器
class zhaoxianController extends Controller
{
    //管理员首页

    public function zhaoxian(){
//        echo"后台首页";
        //加载页面
		//显示文章的内容
		$posts = Post::where('cate_id','17')->orderBy('id','asc')->paginate(3);
        return view("home.zhaoxian",['posts'=>$posts]);

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
