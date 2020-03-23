<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//基础路由
//多请求路由
//路由传参
/**
 * Display All Tasks
 */

//主页
Route::get("/",'Home\IndexController@index');
//
Route::get("index",'Home\IndexController@index');
//服务
Route::get('fuwu','Home\FuwuController@fuwu');
//走进
Route::get('zoujin','Home\ZoujinController@zoujin');
//项目
Route::get('xiangmu','Home\XiangmuController@xiangmu');
//招贤
Route::get('zhaoxian','Home\ZhaoxianController@zhaoxian');
//新闻
Route::get('news','Home\NewsController@news');
//联系
Route::get('lianxi','Home\LianxiController@lianxi');
//服务
Route::get('fankui','Home\FankuiController@fankui');


//中间件


Route::group(['middleware'=>'login'],function(){
	//后台首页路由
	Route::get('admin','Admin\IndexController@index')->name('admin');
	//后台首页添加路由
	Route::get('admin/add','Admin\IndexController@add')->name('admin/add');

	//后台用户路由
	Route::get('admin/user','Admin\UserController@user')->name('admin/user');
	//用户添加
	Route::post('admin/user/insert','Admin\UserController@insert');
	//用户修改
	Route::get('admin/user/edit{id}','Admin\UserController@edit');
	Route::post('admin/user/update','Admin\UserController@update');
	//用户删除
	Route::get('admin/user/delete/{$id}','Admin\UserController@delete');
	//后台个人中心路由
	Route::get('admin/user/add','Admin\UserController@add')->name('admin/user/add');
	//后台个人中心路由
	Route::get('admin/userme','Admin\UserController@store')->name('admin/userme');

	//后台内容路由
	Route::get('admin/form','Admin\FormController@form')->name('admin/form');
	//后台推荐位路由
	Route::get('admin/formadd','Admin\FormController@formadd')->name('admin/formadd');

	//resful控制器 一条规则顶七条

	//后台分类路由
	Route::resource('admin/cate','Admin\CatesController');
	//后台文章管理路由
	Route::resource('admin/article','Admin\ArticleController');
});
//登录页面显示
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/login','Admin\LoginController@dologin');
Route::get('admin/logout','Admin\LoginController@logout');









