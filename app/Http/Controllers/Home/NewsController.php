<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Cate;
//使用类
//后台管理员控制器
class NewsController extends Controller
{
    //管理员首页

    public function news(){
//        echo"后台首页";
        //加载页面
		//读取列表的内容
		$cates = Cate::where('path','0,2')->orderBy('id','asc')->get();		//读取文章的内容
		//显示文章的内容
		$posts = Post::where('cate_id','4')->orderBy('id','')->paginate(3);
		
        return view("home.news",['cates'=>$cates,'posts'=>$posts]);

    }

}
