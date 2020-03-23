<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>中电博为</title>
		<link rel="stylesheet" type="text/css" href="./style/home/css/bootstrap.css">
		<link rel="stylesheet" href="./style/home/css/zoujin.css">
		<script src="./style/home/js/jquery.min.js"></script>
		<script src="./style/home/js/bootstrap.js"></script>
	</head>
	<body>

		<!--头部公众-->
		@include("home.public.header")

		
		<!--悬停图-->
		<div class="container">
			<div class="tail col-md-6">
				<p class="pull-left">
					<h3>服务项目/ Servises</h3>
				</p>
			</div>
			<div class="col-md-6">
				<span class="pull-right" style="margin-top: 20px;"><img src="./style/home/images/wz_r2_c2.jpg">&nbsp;&nbsp;<a href="#">首页</a> >
					服务项目</span>
			</div>
			
			<div class="ser_nav" >
				<ul class="col-md-12 col-xs-12" style="margin-top: 20px;">
					@foreach($posts as $k=>$v)
					<li class="col-md-2 col-xs-2">	
						<a href="#" >
							<div class="navBox box1">{{$v->title}}</div>
							<div class="navBox box2">{{$v->title}}</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			
		</div>
		
		<!--文字-->
		@foreach($posts as $k=>$v)
		<div class="col-md-8 col-md-offset-2" style="margin-top: 20px;" escape="false">
			{{$v->content}}
		</div>
		@endforeach
		<!--图片-->
		
		<div class="col-md-10 col-md-offset-2">
			<div class="col-md-5"><img src="./style/home/images/ser_r3_c2.jpg" class="img-responsive" style="margin:0 auto"></div>
			<div class="col-md-5"><img src="./style/home/images/ser_r3_c2.jpg"  class="img-responsive" style="margin:0 auto"></div>
		</div>
		<div class="col-md-12">
			<img src="./style/home/images/ser_r5_c3.jpg"  class="img-responsive" >
		</div>
		
		
		
		
		<!--尾部公共-->
		@include("home.public.footer")


	</body>
</html>
