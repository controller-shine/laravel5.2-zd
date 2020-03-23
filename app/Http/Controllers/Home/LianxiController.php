<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
//使用类
//前台管理员控制器
class lianxiController extends Controller
{
    //首页

    public function lianxi(){
//        echo"前台服务页面";
        //加载页面

        return view("home.lianxi");

    }
}
