<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
//使用类
//前台首页控制器
class IndexController extends Controller
{
    //首页

    public function index(){
        //加载页面

        return view("home.index");

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
