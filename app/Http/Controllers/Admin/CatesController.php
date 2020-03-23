<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//使用类
use App\Http\Controllers\Controller;
use App\Cate;
use DB;


class CatesController extends Controller
{
    //显示分类列表
	public function index(Request $request)
	{
		
		//读取分类
		$cates = self::getCates();			
		
		//解析模板
		return view('admin.cate.index',['cates'=>$cates,'request'=>$request]);
	}
	//
	public function create()
	{
		//读取所有分类
		$cates=Cate::get();
		return view ('admin.cate.add',['cates'=>$cates]);
	}
	public function store(Request $request)
	{
		//
		 $data=$request->all();
		//插入数据
		//如果要添加的是顶级分类 pid和path都是0
		if($data['pid']==0){
			$data['path']='0';
		}else{
			$info=Cate::find($data['pid']);
			$data['path']=$info->path.','.$info->id;
		}
		//创建模型
		$cate=new Cate;
		$cate->name=$data['name'];
		$cate->pid=$data['pid'];
		$cate->path=$data['path'];
		//
		if($cate->save()){
			return redirect('admin/cate')->with('info','分类添加成功');		
		}else{
			return back()->with('info','分类添加失败');
		}
		
	}
	
	public function show()
	{
	
	}
	
	public function edit($id)
	{
		//读取当前分类的信息
		$info=Cate::findOrFail($id);
		//读取
		$cates=Cate::get();
		//解析模板
		return view('admin.cate.edit',['info'=>$info,'cates'=>$cates]);
		
	}
	
	public function update(Request $request, $id)
	{
		
		
		//修改模型
		$cate= Cate::findOrFail($id);
		$cate->name=$request->name;
		$cate->pid=$request->pid;
		
		//
		if($cate->save()){
			return redirect('admin/cate')->with('info','分类修改成功');		
		}else{
			return back()->with('info','分类修改失败');
		}
	
	}
	
	//获取所有的分类信息 并排序
	public static function getCates()
	{
		//读取分类
		$cates=Cate::select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->get();
		foreach($cates as $key =>$value){
			//判断当前分类是几级分类
			$tmp= count(\explode(',',$value->path));
			$prefix=\str_repeat('|>>>>>',$tmp);
			$value->name=$prefix.$value->name;
			}
			return $cates;
	
	}
			
	
}
