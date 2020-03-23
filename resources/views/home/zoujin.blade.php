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
						<h5 style="line-height: 88px;border-top: 1px solid #05A59B;text-align: left;font-size: 24px;">走进中博 <em style="color: #C0C1C2;">/ About us</em></h5>
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
				<div class="pull-left">
					<h4>企业简介</h4>
				</div>
				<div class="pull-right">
					<img src="./style/home/images/wz_r2_c2.jpg">
					<a href="#">首页</a>>
					<a href="#">关于我们</a>
				</div>
				<br>
				<hr />
				@foreach($posts as $k=>$v)
				<div class="col-lg-offset-0.5">
					<div class="col-sm-4 col-md-4">
						<a href="#" class="thumbnail">
							<img src="./{{$v->img}}" alt="">
						</a>
					</div>
				</div>
				@endforeach
				<!--xingwen-->
				@foreach($posts as $k=>$v)
				<div class="col-lg-12 col-md-12 col-xs-12">
					<p>{{$v->content}}</p>
				</div>
				@endforeach
				<div class="media col-lg-9">
					<div class="media-left media-top">
						<img src="./style/home/images/about_r13_c13.jpg" class="media-object" style="width:80px">
					</div>
					<div class="media-body">
						<h4 class="media-heading"></br>地址：积分多看看分隔符</br>
							联系电话:005904=3==4305</h4>
					</div>
				</div>
				<ul class="nav nav-list">
					<li class="divider"></li>
				</ul>
				<hr />

				<h3>相关推荐</h3>
				<br/>
				@foreach($posts as $k=>$v)
				<div class="col-md-12">
					<ul class="col-md-6 ">
						<li class="col-md-8"><a href="#">{{$v->write}}</a></li>
						<li class="col-md-4">{{$v->created_at}}</li>
					</ul>
					<ul class="col-md-6 ">
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
