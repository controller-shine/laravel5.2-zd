<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>中电博为</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./style/home/css/bootstrap.css" />
    <link rel="stylesheet" href="./style/home/css/index/bootstrap.min.css">
    <script src="./style/home/js/index/jquery.min.js"></script>
    <script src="./style/home/js/index/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
        }
        .list_lh li {
            text-align: left;
            font-size: 16px;
            line-height: 30px;
        }

        li {
            display: list-item;
            text-align: -webkit-match-parent;
        }

        .list_lh {
            height: 30px;
            overflow: hidden;
            font-size: 14px;
        }
        /* 了解详情*/
        .ab_left ol a {
            width: 20%;
            line-height: 40px;
            border-bottom: 2px solid #5C5A5B;
            border-top: 2px solid #5C5A5B;
            height: 40px;
            display: block;
            float: left;
            transition: all 0.6s;
        }
        a {
            color: #5b5a5a;
            text-decoration: none;
        }
        ol, ul, li {
            list-style-type: none;
        }
        .bwzt{
            margin-top: 30px;
        }
        .bwwz{
            padding: 0px;
        }

        .bwzt{
            padding-left: 0px;
        }
        .bwtp{
            padding-left: 0px;
            margin-top: 20px;
            padding-right: 0px;
        }
        .zjbwbt{
            margin-top: 30px;
        }
        .fbt{
            margin-top: 0px;
            font-size: 30px;
            text-align: left;
            line-height: 30px;
            color: #373731;
            margin-bottom: 0px;
        }
        .f14{
            font-size: 14px;
        }
        .ljxq a{
            width: 20%;
            line-height: 40px;
            border-bottom: 2px solid #5C5A5B;
            border-top: 2px solid #5C5A5B;
            height: 44px;
            display: block;
            float: left;
            transition: all 0.6s;
            color: #5b5a5a;
            text-decoration: none;
            text-align: center;
        }


        .xinwen heixian{
            width: 5%;
            height: 1px;
            background: #3F3D3E;
            float: left;
            display: block;
            margin-top: 5px;
            overflow: hidden;
        }
        .lianxi heixian{
            width: 5%;
            height: 1px;
            background: #3F3D3E;
            float: left;
            display: block;
            margin-top: 5px;
            overflow: hidden;
        }

        .img-scroll { position:relative; margin-top:35px; width:100%; height:370px}
        .img-list { position:relative; width:100%; height:235px;  overflow:hidden; }
        .img_list1{ width:100%; height:235px; overflow:hidden; }
        .img_list1 ul{width:100%; height:235px; overflow:hidden;}
        .img_list1 ul li{ text-align:left;   float:left; margin-right:19px;width:350px; height:235px; position:relative; overflow:hidden }
        .img_list1 ul li:last-child{ margin-right:0px}
        .img_list1 ul li a img{ text-align:center;  display:block;  overflow:hidden; width:350px; height:235px; transition: all 0.6s; }
        .img_list1 ul li  a:hover img{ text-align:center;  display:block;  overflow:hidden; width:350px; height:235px; transform: scale(1.2); }

        .img_list1 ul li a div { width:0px; height:0px; display:none}
        .img_list1 ul li a:hover div{ background:url("style/home/images/3index_r2_c2.png") repeat;width:100%; height:100%; position:absolute; top:0px; left:0px; display:block; transition:3s all}
        .img_list1 ul li a:hover div span{ width:330px; border:1px solid #fff; margin:10px; height:215px; line-height:215px; text-align:center; font-size:16px; display:block; color:#fff}
        .img_list1 ul li  div  a{ color:#fff}

    </style>
</head>
<body>
<!--导航栏-->
<nav class="navbar navbar-default" role="navigation" style="background-color: white; margin: 0px; border:none;">
    <div class="container">
        <!--导航栏图片 -->
        <div class="navbar-header" style="height: 100px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <div class="nav-fluid" style="margin-top: 16px;">
                <img src="style/home/images/index_r1_c2.jpg" class="img-responsive " />
            </div>
        </div>
        <!-- 导航栏文字 -->
        <div class="collapse  navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right  text-center"  style="margin-top: 30px;">
                <li> <a href="./index">首页</a> </li>
                <li> <a href="./zoujin">走进中博</a> </li>
                <li> <a href="./xiangmu">项目案例</a></li>
                <li> <a href="./fuwu">服务项目</a></li>
                <li> <a href="./news">新闻资讯</a></li>
                <li> <a href="./zhaoxian">招贤纳士</a></li>
                <li> <a href="./lianxi">联系我们</a></li>
                <li> <a href="./fankui">客户反馈</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--轮播-->
<div class="carousel slide" id="slidershow" data-ride="carousel" data-interval="2000">
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner img-responsive">
            <div class="item active ">
                <img src="style/home/images/index_r5_c1.jpg" alt="First slide" />
            </div>
            <div class="item">
                <img src="style/home/images/index_r5_c1.jpg" alt="Second slide" />
            </div>
            <div class="item">
                <img src="style/home/images/index_r5_c1.jpg" alt="Third slide" />
            </div>
        </div>
    </div>
</div>


<!--公告-->
<div class="gonggao col-md-12 col-xs-12 " style="background-image:url(./style/home/images/index_r7_c7.jpg);background-size:contain;width: 100%; height: 75px; padding: 0px;">
    <!--left-->
    <div class="col-md-7 col-xs-7" style="margin-top: 20px; ">
        <div class="col-md-2 col-xs-4 text-right" style="padding-left: -20px;">
            <p>公告 &nbsp;&nbsp;<img src="style/home/images/indexe_r2_c3.png" /></p>
        </div>
        <div class="list_lh col-md-5 col-xs-5 text-left" style="height: 30px; padding: 0px 0px; margin: 0px;">
            <ul>
                <li style="padding: 0px;overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 100%;"> <small class="pull-right" style="font-size: 12px;color: #CCCCCC">2016-09-20</small><a href="#" title="你干啥那吃饭不吃饱">[企业管理]网游战江湖业管理]网游战江湖公业管理]网游战江湖公业管理]网游战江湖公公测豪华礼包</a></li>
                <li class="notice" style="padding: 0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 100%;"> <small class="pull-right" style="font-size: 12px;color: #CCCCCC">2016-09-20</small><a href="#" title="你干啥那吃饭不吃饱">[6理]网464游战江湖公业管理]网游战江湖公业管理]网游战江湖公公测豪华礼包</a> </li>
                <li class="notice" style="padding: 0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 100%;"> <small class="pull-right" style="font-size: 12px;color: #CCCCCC">2016-09-20</small><a href="#" title="你干啥那吃饭不吃饱">[企4理]网游战江湖业管理]网游战江湖公业管理]网游战江湖公业管理]网游战江湖公公测豪华礼包</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-3 col-xs-5" style="padding: 0px; margin-top: 10px;">
        <div class="input-group">
            <input type="text" property="123" class="form-control " >
            <span class="input-group-btn">
						<button>
                            <img src="style/home/images/index_r2_c29.jpg" style="height:30px;">
						</button>
					</span>
        </div><!-- /input-group -->
    </div>
</div>
</div>
<!--公告结束-->
<!--走进博为-->
<div class="container zjbw" style=" padding-left: 30px;">
    <div class="zjbwbt col-md-12">
        <p class="text-center" style="font-size: 30px;">走进博为</p>
        <p class="text-center" style="font-size: 12px; margin: 0px; ">ABOUT US</p>
        <div><img src="style/home/images/index_r6_c6.png" class="img-responsive center-block" /></div>
    </div>
    <div class="row bwzt col-md-12" style="background:url(./style/home/images/index_r1_c2.png) no-repeat center;background-size:contain;margin-bottom: 0px;">
        <div class="text-left bwwz col-md-6" style="padding-left: 20px;">
            <p class="fbt">中电博为电力工程勘探设计公司<br /> <em style="width: 10%;height: 2px;background: #C6C2C1;margin-top: 15px;overflow: hidden;display: block;float: left;"></em> </p>
            <p class="f14 text-left" style="padding-top:45px;margin-bottom: 0px;"> 有限公司注册资本1000万 元人民币 ，持有河南省建设厅颁发的电力行业（送电、变电）<br /> 工程设计乙级资质。 是一家专业从事专业从事新能源发电、220kV及以下的送变电、农<br /> 配网和用户工程的勘察设计 、技术服务、造价咨询及工程总承包等的企业。</p>
            <p class="text-left ljxq" style="padding-top: 50px;margin-bottom: 0px;"><a href="#" style="margin-bottom: 10px;"> 了解详情+</a></p><br>
        </div>
        <div class="text-right bwtp col-md-6">
            <img class="img-responsive" src="style/home/images/index_r11_c9.jpg" style="margin-top:-20px;padding:0px 30px 60px 30px;" />
        </div>
    </div>
</div>
<div class=" row   img-responsive" style="padding: 0px; margin: 0px; width: 100%;">
    <img src="./style/home/images/index_r26_c1.jpg" class="img-responsive" alt="Responsive image" />
</div>
<!--工程案例-->
<div style="background: #f8f8f8;">
    <div class="container">
        <div class="jieshao col-md-12">
            <h1 class="text-center" style="font-size: 30px;">工程案例</h1>
            <p class="text-center" style=" font-size: 12px; margin: 0px;">ABOUT US</p>
            <div style="position: relative; ">
                <img src="style/home/images/index_r6_c6.png" class="img-responsive center-block" />
            </div>
            <p class="text-center" style="margin-bottom: 30px;">专业从事新能源发电、220kV及以下的送变电、农配网和用户工程的勘察设计、技术服务、造价咨询及工程总承包等</p>
        </div>
        <div class="img-scroll text-center  col-md-12">
            <div class="img-list">
                <div class="img_list1">
                    <ul>
                        <li>
                            <a href="#"><img src="style/home/images/index_r13_c11.jpg" />
                                <div>
                                    <span>宗庄35千伏线路改造工程</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="style/home/images/index_r13_c11.jpg" />
                                <div>
                                    <span>宗庄35千伏线路改造工程</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"><img src="style/home/images/index_r13_c11.jpg" />
                                <div>
                                    <span>宗庄35千伏线路改造工程</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center col-md-12 col-xs-12" style="padding-top: 60px;">
                <span class="prev"><img src="style/home/images/index_r8_c7.png" /></span>
                <span class="next"><img src="style/home/images/index_r8_c10.png"/></span>
            </div>
        </div>
        <script type="text/javascript" src="style/home/js/index/011.js"></script>
    </div>
    <div class="img-responsive col-md-12" style="padding: 0px; ">
        <img src="style/home/images/index_r15_c3.jpg" class="img-responsive" alt="Responsive image" style="width:100%; height: 47px;" />
    </div>
</div>
<!--新闻中心-->
<div class="container" style="background:url(./style/home/images/bgindex_r2_c2.jpg) no-repeat center; background-position:bottom left; background-size:100%;margin-bottom: 0px;padding:0px 0px 50px 20px;">
    <div class="row" style=" padding-left: 30px;margin-right: 0px;">
        <div class="xinwen col-md-6 col-xs-12" style="padding:0px;">
            <div>
                <h5 style="margin-bottom:0px; color: #b7b7b7; font-size: 18px;">NEWS</h5>
                <h4 style="margin-top:0px; color: #5b5a5a; font-size: 30px;">新闻中心</h4>
                <li class="heixian"></li>
            </div>
            <div class=" col-md-6" style="padding: 0px; text-align: center;">
                <img class="img-responsive " src="style/home/images/index_r17_c2.jpg" style="padding-top: 0px; padding-right:10px;
                border: medium none;vertical-align: middle;" />
            </div>
            <div class="col-md-6 col-xs-12 pull-right" style="padding: 0px;">
                <p style="color: #5b5a5a;text-decoration: none; font-size: 18px; padding: 0px;overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 80%;"> <a href="#">1-9月份发电量46891亿千瓦1-9月份发电量46891亿千瓦1-9月份发电量46891亿千瓦1-9月份发电量46891亿千瓦</a></p>
                <div class="col-xs-12" style="margin:0px;padding: 0px;">
                    <p style="font-size: 14px; color: #CCCCCC;"><img src="style/home/images/nindex_r2_c2.png" />2017-09-20</p>
                </div>
                <div>
                    <p class="col-md-12" style="padding: 0px; color: #5b5a5a; ">规模以上工业增加值同比实际增长6.6%(以下增加值<br>增速均为 扣除价格因素的实际增长率)，比8月份规模以上工</p>
                    <p><a href="#">详情+</a></p>
                </div>
            </div>
            <br />
            <div style="padding-top: 20px;padding-left: 0px;">
                <div class=" row col-md-12 col-xs-12" style="margin: 0px; padding: 0px;">
                    <li class="col-md-3 pull-left" style="padding: 0px;margin:0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 40%;"><img src="style/home/images/index_r17_c3.png" class="pull-left" style="padding-top: 8px; padding-right: 5px;" />2017年中国发电行业发电行业发电行业发电行业发电及用电结构变</li>
                    <li class="col-md-3 pull-left" style="padding: 0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 40%;"><img src="style/home/images/index_r17_c3.png" class="pull-left" style="padding-top: 8px; padding-right: 5px; padding-left: 20px;" />2017年中国发电行业发电行业发电行业发电行业发电及用电结构变</li>
                </div>
                <div class="row col-md-12 col-xs-12" style="margin: 0px; padding: 0px;">
                    <li class="col-md-3 pull-left" style="padding: 0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 40%;"><img src="style/home/images/index_r17_c3.png" class="pull-left" style="padding-top: 8px; padding-right: 5px;" />   发电行业发电行业发电行业发电及用电结构变</li>
                    <li class="col-md-3 pull-left" style="padding: 0px; overflow: hidden; text-overflow:ellipsis;white-space: nowrap;width: 40%;"><img src="style/home/images/index_r17_c3.png" class="pull-left" style="padding-top: 8px; padding-right: 5px; padding-left: 20px;" />2017年中国发电行业发电行业发电行业发电行业发电及用电结构变</li>
                </div>
            </div>
        </div>
        <div class="lianxi col-md-6 col-xs-10" style="padding: 0px;">
            <div>
                <h5 style="margin-bottom:0px; color: #b7b7b7; font-size: 18px;">CONTAT US</h5>
                <h4 style="margin-top:0px; color: #5b5a5a; font-size: 30px;">联系我们</h4>
                <li class="heixian"></li>
            </div>
            <p>先进的技术、优质的服务、良好的信誉为客户提供最满意的服务</p>
            <p><img src="style/home/images/index_r10_c11.png" />郑东新区商务内环路绿地中心千玺广场2913</p>
            <p><img src="style/home/images/index_r12_c11.png" />95409564416</p>
            <p><img src="style/home/images/index_r14_c13.png" />54065-0-25165465</p>
            <p><img src="style/home/images/index_r16_c13.png" />郑东新区商</p>
        </div>
    </div>
</div>

<!--链接-->
<div class="container" style="margin-top: 50px;margin-bottom: 20px;">
    <li style="font-size: 18px; color: #5b5a5a;"> 友情链接：<a href="#" style="font-size: 14px; color: #5b5a5a;">中科技电商网</a> | <a href="#"style="font-size: 14px; color: #5b5a5a;">中科技电商网</a> | <a href="#" style="font-size: 14px; color: #5b5a5a;">中科技电商网</a></li>
</div>

<!--尾部公共-->
@include("home.public.footer")

<!--公告栏轮播-->
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script type="text/javascript" src="./style/home/js/index/scroll.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.list_lh li:even').addClass('lieven');
    })
    $(function(){
        $("div.list_lh").myScroll({
            speed:60, //数值越大，速度越慢
            rowHeight:30 //li的高度
        });
    });
</script>
</body>
</html>