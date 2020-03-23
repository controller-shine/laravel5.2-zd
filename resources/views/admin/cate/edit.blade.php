<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 中电博为后台</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../style/admin/assets/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../../style/admin/assets/css/animate.css" rel="stylesheet">
    <link href="../../../style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加列表</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" action="{{url('/admin/cate/'.$info->id)}}" method="post" id="commentForm">
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">分类名称：</label>
                                <div class="col-sm-8">
                                    <input id="name" name="name" class="form-control"  value="{{$info['name']}}" type="text" aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
                            
							<div class="form-group">
							    <label class="col-sm-3 control-label">父级分类：</label>
							    <div class="col-sm-8">
							       <select class="form-control" name="pid">
							         <option value="0">请选择</option>
									 @foreach($cates as $k=>$v)
									 <option value="{{$v->id}}" @if($v->id == $info['pid']) selected @endif>{{$v->name}}</option>
									 @endforeach
							       </select>
							    </div>
							</div>
							
                            <div class="form-group">
                            	{{csrf_field()}}
                                <div class="col-sm-8 col-sm-offset-3">
									<input type="hidden" name="_method" value="PUT">
                                    <input type="submit" value="修改" class="btn btn-danger">
                            		<input type="reset" value="重置" class="btn ">
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

    
    

</body>

</html>
