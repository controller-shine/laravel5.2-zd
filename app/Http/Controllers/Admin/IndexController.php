<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//使用类
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页
	public function index(){
	//echo"后台首页";
	//加载页面
	
	        return view("admin.index.index");
	    }
	
	public function add(){
	//echo"后台首页面";
	//加载页面
	
	        return view("admin.index.add");
	    }
}
