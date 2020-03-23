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

<!--路径-->
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="wrap overflow pt25 clearfix.col-md-4">

      <div class="col-xs-12 col-sm-6 col-md-8"><h2>工程案例 <small>/Case</small></h2></div>
      <div class="col-sm-6 col-md-2">
        <h4><span class="glyphicon glyphicon-home"></span><small>首页</small><span class="glyphicon glyphicon-menu-right"></span>工程案例</h4>
      </div>

    </div>
  </div>
  <div class="col-md-2"></div>
  </div>
</p>
<!-- 路径结束 -->
 
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
					<li class="col-md-6 col-xs-6">	
						<a href="#" >
							<div class="navBox box1">{{$v->title}}</div>
							<div class="navBox box2">{{$v->title}}</div>
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			
		</div>

<!-- 设计按钮施工按钮结束 -->

<!-- 图 -->
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption"> 
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="clearfix visible-xs-block"></div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>
 </div>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="clearfix visible-xs-block"></div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="thumbnail">
      <a href="anli_detail.html"><img src="./style/home/images/index_r13_c11.jpg" alt="...">
      <div class="caption">
        <h3>龙湖百合花园小区二期供配电工程</h3>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-2"></div>

 

 
</div>


<!-- 图 -->

<!-- 分页 -->
<nav aria-label="Page navigation" style="text-align: center;">
  <ul class="pagination">
    <li>上一页
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">1</span>
      </a>
      </li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>

    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">下一页</span>
      </a>
    </li>
  </ul>
</nav>
<!-- 分页 -->

    
    
<!--尾部公共-->
    @include("home.public.footer")
