<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>中电博为 - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../style/admin/assets/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../style/admin/assets/css/animate.css" rel="stylesheet">
    <link href="../style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg" style="background-image: url(../../public/style/images/004.jpg); " >
    <div class="middle-box text-center loginscreen  animated fadeInDown" >
        <div>
            <div style="margin-top: 200px;">
				<img src="../../public/style/home/images/logo.png" alt="">
            </div>
			<br/>
            
            <form class="m-t" role="form"  action="{{url('admin/login')}}" method="post">
                <div class="form-group">
                    <input type="text" name="yonghuming" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="密码" required="">
                </div>
				{{csrf_field()}}
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
				
                <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a> | <a href="register.html">注册一个新账号</a>
                </p>

            </form>
        </div>
    </div>
    <!-- 全局js -->
    <script src="../style/admin/assets/js/jquery.min.js?v=2.1.4"></script>
    <script src="../style/admin/assets/js/bootstrap.min.js?v=3.3.6"></script>

    
    

</body>

</html>
