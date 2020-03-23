<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>中电博为</title>
		<link rel="stylesheet" type="text/css" href="./style/home/css/bootstrap.min.css">
		<link rel="stylesheet" href="./style/home/css/zoujin.css">
		<script src="./style/home/js/jquery.min.js"></script>
		<script src="./style/home/js/bootstrap.min.js"></script>
	</head>
	<body>


		<!--头部公众-->
		@include("home.public.header")

		
		<div class="container">
			<!--left-->
			<div class=" col-lg-3 col-sm-3 media-middle">
				<div class="text-center">
						<h5 style="line-height: 88px;border-top: 1px solid #05A59B;text-align: left;font-size: 24px;">新闻资讯 <em style="color: #C0C1C2;">/ News</em></h5>
					@foreach($cates as $k=>$v)
					
					<ul class="nav nav-pills nav-stacked">
						<div class="btn-group-vertical"  >
						     <button type="button" style="border: 1px solid #E3E3E3;width: 200px; line-height: 30px;background: #05a59b;color: #fff;" class="btn btn-primary">{{$v->name}}</button>
						</div>
					</ul>
					@endforeach
					<img src="./style/home/images/er_r10_c2.jpg" class="img-responsive" style="margin:0 auto">
				</div>
			</div>
			<!--right-->
			
			<div class="right-top col-lg-3 col-sm-3 media-middle" style="margin-top: 25px;">
				<img src="./style/home/images/about.jpg">
			</div>
			<div class="col-lg-9 col-sm-9">
				<div class="pull-left" >
					<em></em>
					<h4>企业简介</h4>
				</div>
				<div class="pull-right">
					<img src="./style/home/images/wz_r2_c2.jpg">
					<a href="#">首页</a>>
					<a href="#">关于我们</a>
				</div>
				<br>
				<hr />
				<div style="width: 100%;background: #ECECEC;padding: 30px 0px;overflow: hidden; height: 150px;">
						<img src="./style/home/images/news_r2_c2.jpg" style="margin-left: 20px;">			
						<a href="#" style="font-size: 20px;">贵宾杭州千岛湖快乐之旅</a>
						<div style="height: 10px;"></div>
						<i style="margin-left: 40px; color: #CCCCCC;">2017-09-20</i>
						<div style="height: 10px;"></div>
						<p style="margin-left: 40px;">
							专业从事新能源发电、220kV及以下输变电、农配网和供配电工程勘察设计、技术服务、造价咨询及工程总承包等
						</p>
					
				</div>
				@foreach($posts as $k=>$v)
				<div class="col-md-12">
					<ul style="text-align: left;line-height: 44px;border-bottom: 1px dashed #CDCDCD;font-size: 16px;">
						<li class="col-md-8"><a href="#">{{$v->write}}</a></li>
						<li class="col-md-4">{{$v->created_at}}</li>
					</ul>				
				</div>
				@endforeach
			</div>
				

			<!--copy-->
		</div>
		
		
		<!--尾部公共-->
		@include("home.public.footer")

	</body>
</html>
