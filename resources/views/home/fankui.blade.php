<!DOCTYPE html>
<html lang="zh-CN">
 <head> 
  <meta charset="utf-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <title>中电博为</title> 
  <link rel="stylesheet" type="text/css" href="./style/home/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="./style/home/css/zoujin.css" /> 
  <script src="./style/home/js/jquery.min.js"></script> 
  <script src="./style/home/js/bootstrap.min.js"></script> 
 </head> 
 <body> 
  <!--头部公众--> 
  @include("home.public.header")
  <!-- 代码 结束 --> 
  <!--客户反馈---> 
  <div class="row" style="margin-top: 100px;"> 
  
   <div class="col-md-offset-3 col-md-3"> 
    <!-- <div class="fankui overflow clearfix"> --> 
    <!-- <div class="left_fk overflow fl"> --> 
    <!-- <p class="pt20"> --> 
    <img src="./style/home/images/fankui_r1_c1.jpg" class="img-responsive " /> 
    <!-- </p>
  <p class="p20 tl l-24 huise1"> --> 
    <p> 请帮助我们更好地为您提供服务，若您有任何意见或建议，请及时反馈给我们。我们会仔细阅读所有来信，及时回复！ </p> 
    <img src="./style/home/images/fankui_r2_c1.jpg" class="img-responsive " /> 
   </div> 
   <div class="col-md-offset-1 col-md-4" style="margin-left: 50px; margin-top: 100px;"> 
    <form class="form-horizontal" role="form"> 
     <div class="form-group"> 
      <div class="col-sm-10"> 
       <input type="text" class="form-control" style="width: 300px; " placeholder="标题" /> 
      </div> 
     </div> 
     <div class="form-group" style="margin-top: 30px;"> 
      <div class="col-sm-10"> 
       <input type="text" class="form-control" style="width: 300px;" placeholder="姓名" /> 
      </div> 
     </div> 
     <div class="form-group " style="margin-top: 30px;"> 
      <div class="col-sm-10"> 
       <input type="text" class="form-control" style="width: 300px;" placeholder="QQ" /> 
      </div> 
     </div> 
     <div class="form-group" style="margin-top: 30px;"> 
      <div class="col-sm-10"> 
       <input type="text" class="form-control" style="width: 300px;" placeholder="PHONE" /> 
      </div> 
     </div>  
     <div class="form-group" style="margin-top: 30px;"> 
      <div class="col-sm-10"> 
       <textarea class="form-control" rows="6" style="width: 300px;" placeholder="反馈内容"></textarea> 
      </div> 
     </div> 
    </form> 
    <div class="row" style="margin-top: 25px; width: 100px；"> 
     <div class="col-md-3"> 
      <p> <button type="button" class="btn btn-danger  data-toggle=" modal"="" data-target="#myModal" "="">提交</button> </p> 
     </div> 
    </div> 
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
     <div class="modal-dialog"> 
      <div class="modal-content"> 
       <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
        <h4 class="modal-title" id="myModalLabel"> 模态框（Modal）标题 </h4> 
       </div> 
       <div class="modal-body">
         在这里添加一些文本 
       </div> 
       <div class="modal-footer"> 
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭 </button> 
        <button type="button" class="btn btn-primary"> 提交更改 </button> 
       </div> 
      </div>
      <!-- /.modal-content --> 
     </div>
     <!-- /.modal --> 
    </div> 
  </div>
    <!--copy--> 
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
   </div>
  </div>
 </body>
</html>