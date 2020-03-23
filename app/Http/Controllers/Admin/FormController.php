<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//使用类
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    //后台新闻页
	public function form(){
	//echo"后台新闻页";
	//加载页面
	
	        return view("admin.form.form");
	    }
	
	public function formadd(){
	//echo"后台新闻页添加";
	//加载页面
	
	        return view("admin.form.formadd");
	    }
}
