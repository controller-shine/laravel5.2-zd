<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
//使用类
use App\Http\Controllers\Controller;
use App\user;
use Hash;

class UserController extends Controller
{
    //后台用户
	public function user(){
	//echo"后台用户";
			//数据分类显示
			$users = user::paginate();
			//分类变量 解析模板
	        return view("admin.user.user",['users'=>$users]);
	}
	
	public function add(){
	//echo"后台用户";
			
	        return view("admin.user.add");
	}
	
	//用户修改
	public function edit($id){
	
	       //读取用户的信息
		   $user=User::findOrfail($id);
		   //展示用户的信息
		  return view('admin.user.edit',['user'=>$user]);
		  
	}
	
	//用户的更新操作
	public function update(Request $request){
	
			//读取用户的模型
			$user=User::findOrfail($request->input('id'));
			$user->username=$request->input('username');
			$user->email=$request->input('email');
			$user->intro=$request->input('intro');
			
			//处理图片上传
			if($request->hasFile('profile')){
				//文件存放目录
				$path='./Uploads/'.date('Ymd');
				//获取后缀
				$suffix=$request->file('profile')->getClientOriginalExtension();
				//文件的名称
				$fileName= time().rand(100000,999999).'.'.$suffix;
				$request->file('profile')->move($path, $fileName);
				$user->profile= trim($path.'/'.$fileName,'.');
			}
			if($user->save()){
				return redirect('admin/user')->with('info','更新成功');
			}else{
				return back()->with('info','更新失败');
			}
			

	}
	
	//用户删除
	public function delete($id){
		
		// //创建模型
		// $user=User::findOrfail($id);
		// //读取用户的头像信息
		// $profile =$user->profile;
		// $path='.'.$profile;
		// if(file_exists($path)){
		// unlink('.'.$profile);
		// }
		// //删除
		// if($user->delete()){
		// 	return back()->with('info','删除成功');
		// }else{
		// 	return back()->with('info','删除失败');
		// }
	        
	}
	
	//用户的插入动作
	public function insert(Request $request){
		
		// $data=$request->all();
		
		//表单验证
		// $this->validate($request, [
		//         'name' => 'required|regex:/\w{5,20}/',
		// 		'email'=>'requires|email',
		// 		'password'=>'same:repassword'
		//     ],[
		// 		'username.requires'=>'用户名不能为空',
		// 		'username.reges'=>'用户名规则不正确 请填写5~50位字母数字下划线',
		// 		'email.required'=>'邮箱不能为空',
		// 		'email.email'=>'邮箱格式不正确',
		// 		'password.same'=>'两次密码不一致'
		// 	]);
		

		
		//数据插入动作
		$user=new user;
		$user->username=$request->input('username');
		$user->email=$request->input('email');
		$user->password=Hash::make($request->input('password'));
		$user->intro=$request->input('intro');
		//随机字符串
		$user->remember_token=\str_random(50);
		//处理图片上传
		if($request->hasFile('profile')){
			//文件存放目录
			$path='./Uploads/'.date('Ymd');
			//获取后缀
			$suffix=$request->file('profile')->getClientOriginalExtension();
			//文件的名称
			$fileName=time().rand(100000,999999).'.'.$suffix;
			$request->file('profile')->move($path, $fileName);
			$user->profile= trim($path.'/'.$fileName,'.');
		}
		//执行插入
		if($user->save()){
			return redirect('admin/user')->with('info','添加成功');
		}else{
			return back()->with('info','添加失败');
		}
		
	}

}
	
	
	
