<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 中电博为后台——用户数据</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../style/admin/assets/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../style/admin/assets/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="../style/admin/assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="../style/admin/assets/css/animate.css" rel="stylesheet">
    <link href="../style/admin/assets/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                        <table class="table ">
                        </table>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    
                    <div class="ibox-content">
                        <div class="">
                            <a href="{{url('/admin/user/add')}}">
								<button class="btn btn-success  dim" type="button"><i class="fa fa-upload">添加用户</i></button></a>
                        </div>
                        <table class="table table-striped table-bordered table-hover dataTables-example" id="editable">
                            <thead>
                                <tr >
                                    <th class="text-center">id</th>
                                    <th class="text-center">用户名</th>
                                    <th class="text-center">邮箱</th>
                                    <th class="text-center">头像</th>
                                    <th class="text-center">操作</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($users as $k=>$v)
                                <tr class="gradeA">
                                    <th class="text-center">{{$v->id}}</th>
                                    <th class="text-center">{{$v->username}}</th>
                                    <th class="text-center">{{$v->email}}</th>
                                    <th class="text-center"><img src=" ../{{$v->profile}}" width="50px" alt=""></th>
                                    <th class="text-center" style="width: 200px;">
										<button class="btn btn-info " type="button"><i class="fa fa-paste"></i><a href="{{url('/admin/user/edit')}}{{$v->id}}">修改</a> </button>
										<button class="btn btn-warning"type="button"><i class="fa fa-warning"></i><a href="'/admin/user/delete'/{{$v->id}}">删除</a></button>
									</th>
                                </tr>
								@endforeach
                            </tbody>
                            <tfoot>
                                <tr >
                                    <th class="text-center">id</th>
                                    <th class="text-center">用户名</th>
                                    <th class="text-center">邮箱</th>
                                    <th class="text-center">头像</th>
                                    <th class="text-center">操作</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="../style/admin/assets/js/jquery.min.js?v=2.1.4"></script>
    <script src="../style/admin/assets/js/bootstrap.min.js?v=3.3.6"></script>



    <script src="../style/admin/assets/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="../style/admin/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../style/admin/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- 自定义js -->
    <script src="../style/admin/assets/js/content.js?v=1.0.0"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {
            $('.dataTables-example').dataTable();

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[5]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);

        }
    </script>

    
    

</body>

</html>
