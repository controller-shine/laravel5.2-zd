<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>中电博为后台</title>
		<meta name="keywords" content="">
		    <meta name="description" content="">
		    <link rel="shortcut icon" href="favicon.ico"> <link href="./style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
		    <link href="./style/admin/assets/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
		    <link href="./style/admin/assets/css/animate.css" rel="stylesheet">
		    <link href="./style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">
		</head>
		
		<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
		    
			
			<!--主体-->
			<div id="wrapper">
				<!--左侧导航开始-->
				<nav class="navbar-default navbar-static-side" role="navigation">
					<div class="nav-close"><i class="fa fa-times-circle"></i>
					</div>
					<div class="sidebar-collapse">
						<ul class="nav" id="side-menu">
							<li class="nav-header">
								<div class="dropdown profile-element">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">
										<span class="clear">
											<span class="block m-t-xs" style="font-size:20px;">
												<i class="fa fa-area-chart"></i>
												<strong class="font-bold">中电博为</strong>
											</span>
										</span>
									</a>
								</div>
								<div class="logo-element">中电博为
								</div>
							</li>
							<li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
								<span class="ng-scope">首页</span>
							</li>
							<li>
								<a class="J_menuItem" href="{{ route('admin/add') }}">
									<i class="fa fa-home"></i>
									<span class="nav-label">主页</span>
								</a>
							</li>
			
							<li class="line dk"></li>
							<li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
								<span class="ng-scope">列表</span>
							</li>
			
							<li>
								<li>
								    <a href="">分类管理<span class="fa arrow"></span></a>
								    <ul class="nav nav-third-level">
								        <li><a class="J_menuItem" href="{{url('admin/cate')}}">分类列表</a>
								        </li>
								        <li><a class="J_menuItem" href="admin/cate/create">添加列表</a>
								        </li>
								    </ul>
								</li>
							</li>
			
							<li class="line dk"></li>
							<li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
								<span class="ng-scope">内容</span>
							</li>
							<li>
								<a href="#"><i class="fa fa-flask"></i> <span class="nav-label">内容管理</span><span class="fa arrow"></span></a>
								<ul class="nav nav-third-level">
									<li>
										<a class="J_menuItem" href="admin/article">文章列表</a>
									</li>
								
									<li>
										<a class="J_menuItem" href="admin/article/create">添加文章</a>
									</li>
								</ul>
							</li>
			
							<li class="line dk"></li>
							<li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
								<span class="ng-scope">用户</span>
							</li>
							<li>
								<a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li><a class="J_menuItem" href="{{url('/admin/user')}}">用户列表</a>
									</li>
									<li><a class="J_menuItem" href="{{url('/admin/user/add')}}">用户添加</a>
									</li>
									<li><a class="J_menuItem" href="{{url('/admin/user')}}">修改密码</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!--左侧导航结束-->
				<!--右侧部分开始-->
				<div id="page-wrapper" class="gray-bg dashbard-1">
					
					<?php $user = \App\User::find(session('uid'));?>
					
					<div class="row border-bottom">
						<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
							<div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i>
								</a>
								<form role="search" class="navbar-form-custom" method="post" action="search_results.html">
									<div class="form-group">
										<input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
									</div>
								</form>
							</div>
							<ul class="nav navbar-top-links navbar-right">
								<li class="dropdown">
									<a data-toggle="dropdown" href="#">
											<img src="./{{$user->profile}}" width="50px" alt="">
										     {{$user->username}}
									</a>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;个人中心</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;修改密码</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="admin/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;&nbsp;退出</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<div class="row J_mainContent" id="content-main">
					    <iframe id="J_iframe" width="100%" height="100%" src="admin/add" frameborder="0" data-id="index_v1.html" seamless></iframe>
					</div>
					
				</div>
				<!--右侧部分结束-->
			</div>
			
			
			
		    <!-- 全局js -->
		    <script src="./style/admin/assets/js/jquery.min.js?v=2.1.4"></script>
		    <script src="./style/admin/assets/js/bootstrap.min.js?v=3.3.6"></script>
		    <script src="./style/admin/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
		    <script src="./style/admin/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		    <script src="./style/admin/assets/js/plugins/layer/layer.min.js"></script>
		
		    <!-- 自定义js -->
		    <script src="./style/admin/assets/js/hAdmin.js?v=4.1.0"></script>
			<script type="text/javascript" src="./style/admin/assets/js/index.js"></script>
		    <!-- 第三方插件 -->
		    <script src="./style/admin/assets/js/plugins/pace/pace.min.js"></script>
		
		</body>
		
		</html>
		