<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> 中电博为后台-添加文章</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../style/admin/assets/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../../style/admin/assets/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../style/admin/assets/css/plugins/simditor/simditor.css" />
    <link href="../../../style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文章添加</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" action="{{url('/admin/article/'.$info->id)}}}" method="post" id="commentForm" enctype="multipart/form-data">
							
							<div class="form-group">
							    <label class="col-sm-2 control-label">选择栏目：</label>
							    <div class="col-sm-8">
							       <select class="form-control" name="cate_id">
							         <option value="0">请选择</option>
									 @foreach($cates as $k=>$v)
									 <option value="{{$v->id}}" @if($v->id == $info->cate_id) selected @endif>{{$v->name}}</option>
									 @endforeach
							       </select>
							    </div>
							</div>
							
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章标题：</label>
                                <div class="col-sm-8">
                                    <input name="title" value="{{$info->title}}" minlength="2" type="text" class="form-control" required="" aria-required="true">
                                </div>
                            </div>
                           
							
							<div class="form-group">
							    <label class="col-sm-2 control-label">文章描述：</label>
							    <div class="col-sm-8">
							        <input type="write" value="{{$info->write}}" name="write" class="form-control" name="url">
							    </div>
							</div>
							
							<div class="form-group">
							    <label class="col-sm-2 control-label">文章主图：</label>
							    <div class="col-sm-8">
							        <input name="img" class="medium" type="file">
							    </div>
							</div>
							
                            <div class="form-group">
                                <label class="col-sm-2 control-label">文章内容：</label>
                                <div class="col-sm-8">
									<div class="ibox float-e-margins">
									    <div class="ibox-content">
									                                    
									        <textarea id="editor" name="content" placeholder="这里输入内容" autofocus>{!!$info->content!!}</textarea>
									                                    
									    </div>
									</div>             
                                </div>
                            </div>
							
                            <div class="form-group">
								{{csrf_field()}}
                                <div class="col-sm-4 col-sm-offset-3">
									<input type="hidden" name="_method" value="PUT">
                                    <button class="btn btn-primary" type="submit">修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 全局js -->
    <script src="../../../style/admin/assets/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../style/admin/assets/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="../../../style/admin/assets/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="../../../style/admin/assets/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="../../../style/admin/assets/js/plugins/validate/messages_zh.min.js"></script>

    <script src="../../../style/admin/assets/js/demo/form-validate-demo.js"></script>

    <!-- simditor -->
    <script type="text/javascript" src="../../../style/admin/assets/js/plugins/simditor/module.js"></script>
    <script type="text/javascript" src="../../../style/admin/assets/js/plugins/simditor/uploader.js"></script>
    <script type="text/javascript" src="../../../style/admin/assets/js/plugins/simditor/hotkeys.js"></script>
    <script type="text/javascript" src="../../../style/admin/assets/js/plugins/simditor/simditor.js"></script>
    <script>
        $(document).ready(function () {
            var editor = new Simditor({
                textarea: $('#editor'),
                defaultImage: 'img/a9.jpg'
            });
        });
    </script>
    
    

</body>

</html>
