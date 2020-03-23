<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 中电博为后台——用户修改</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../style/admin/assets/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../style/admin/assets/css/animate.css" rel="stylesheet">
    <link href="../../style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
       <!-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户添加</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" action="{{url('admin/user/update')}}" method="post" id="signupForm"  enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">用户名：</label>
                                <div class="col-sm-8">
                                    <input id="username" name="username" value="{{$user->username}}" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error">
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="email" name="email" value="{{$user->email}}" class="form-control" type="email">
                                </div>
                            </div>
							
							<div class="form-group">
							    <label class="col-sm-3 control-label">个人介绍：</label>
							    <div class="col-sm-8">
							        <textarea id="intro" name="intro" value="{{$user->intro}}" class="form-control" required="" aria-required="true"></textarea>
							    </div>
							</div>
							
							<div class="form-group">
							    <label class="col-sm-3 control-label">上传头像：</label>
								<img src="{{$user->profile}}" alt="">
							    <div class="col-sm-8">
							        <input id="file" name="profile" class="medium" type="file">
							    </div>
							</div>
							<br/><br/><br/><br/>
							
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="checkbox" id="agree" name="agree"> 我已经认真阅读并同意《中电博为协议》
                                        </label>
                                    </div>
                                </div>
                            </div>
							
                            <div class="form-group">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$user->id}}">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <input type="submit" value="更新" class="btn btn-danger">
									<input type="reset" value="重置" class="btn btn-danger">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- 全局js -->
    <script src="../../style/admin/assets/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../style/admin/assets/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="../../style/admin/assets/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="../../style/admin/assets/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="../../style/admin/assets/js/plugins/validate/messages_zh.min.js"></script>

    <script src="../../style/admin/assets/js/demo/form-validate-demo.js"></script>

    
    

</body>

</html>
