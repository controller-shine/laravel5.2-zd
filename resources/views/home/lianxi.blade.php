<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>中电博为电力工程勘探设计公司</title>
  <link rel="stylesheet" type="text/css" href="./style/home/css/bootstrap.css">
    <link rel="stylesheet" href="./style/home/css/zoujin.css">
    <script src="./style/home/js/jquery.min.js"></script>
    <script src="./style/home/js/bootstrap.js"></script>
</head>
<body>

<!--头部公众-->
@include("home.public.header")

<!-- 代码 结束 -->
<div class="container">
<div class="row" style="margin-top: 30px;">
  <div class="wrap overflow pt25 clearfix.col-sm-8" style="margin-top: 100px;">
    <div class="text-center">
      <h2>联系我们 <br /><small>Contact Us</small> <br /><small>感谢您对中博的关注，如果有任何问题或者意见可以通过以下和我们联系</small></h2>
    </div>
  </div>
</div>
    <div class="row " style="margin-top: 100px;">
      <div class="col-md-offset-4 col-md-2">
        <div>
          <img src="style/home/images/c_r2_c2.jpg" class="img-responsive" />
          <p style="margin-left: 60px">扫一扫</p>
        </div>
      </div>
      <div class="col-md-3">
        联系人：赵经理
        <br /> 移动电话：15136199613 固定电话：0371—55212735
        <br /> 电子邮箱：ZDBW0606@163.com
        <br /> 微信公众号：中电博为电力勘测设计院
        <br /> 网址：http://www.cped.top
        <br />
      </div>
      <div class="col-md-3"></div>
    </div>  
<div class="row" style="margin-top: 100px;">

  <div class="col-md-8">
    <div class="container">
      <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&amp;ak=RDUZ1eWFyD10wX4GBmf4IZQrK1sEUNCc"></script>
      
      <script type="text/javascript"></script>
      <style>
        /*#allmap {width: 1250px;height: 460px;overflow: hidden;font-family:"微软雅黑";}*/
        #allmap {width: 100%;height: 460px;overflow: hidden;font-family:"微软雅黑";}
      </style>
      <div class="map overflow clearfix mt60 " id="allmap">
      </div>
      <script type="text/javascript">
          // 百度地图API功能
          var map = new BMap.Map("allmap");
          var point = new BMap.Point(120.256574,20.879519);
          map.centerAndZoom(point,14);
          // 创建地址解析器实例
          var myGeo = new BMap.Geocoder();
          // 将地址解析结果显示在地图上,并调整地图视野
          myGeo.getPoint("江阴职业技术学院", function(point){
              if (point) {
                  map.centerAndZoom(point, 14);
                  map.addOverlay(new BMap.Marker(point));
              }else{
                  alert("您选择地址没有解析到结果!");
              }
          }, "江阴市");
      </script>
      <div class="col-md-2"></div>
    </div>
  </div>
</div>
</div>

<!--尾部公共-->
@include("home.public.footer")

  <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  </div>
</div>
</body>
</html>