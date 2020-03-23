<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

use Hash;

class LoginController extends Controller
{
    //加载登录页面
	public function login()
	{
		return view('admin.login.login');
	}
	//执行登录操作
	public function dologin(Request $request)
	{
		
		//实例化用户对象
		$user = User::where('username',$request->yonghuming)->firstOrFail();
		//获取用户信息
		if(Hash::check($request->password,$user->password)){
			//写入登入状态
			session(['uid'=>$user->id]);
			return redirect('/admin');
		}else{
			return back();
		}
	}
	//执行等出操作
	public function logout(Request $requset)
	{
		$requset->session()->flush();
		return redirect('index');
	}
}
