<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Cate;

class XiangmuController extends Controller
{
    //
	public function xiangmu(){
	//        echo"后台首页";
	        //加载页面
			//读取列表的内容
			$cates = Cate::where('path','0,2')->orderBy('id','asc')->get();		//读取文章的内容
			//显示文章的内容
			$posts = Post::where('cate_id','4')->orderBy('id','')->paginate(2);
	        return view("home.xiangmu",['cates'=>$cates,'posts'=>$posts]);
	
	    }
}
