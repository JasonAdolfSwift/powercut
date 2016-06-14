<link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="/lib/css/font.css" type="text/css"/>
<link rel="stylesheet" href="/lib/css/app.css" type="text/css"/>
<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css" type="text/css"/>
<link rel="stylesheet" href="/vendor/igrowl/dist/css/igrowl.min.css" type="text/css">
<link rel="stylesheet" href="/vendor/igrowl/dist/css/fonts/feather.css" type="text/css">
<link href="/vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/vendor/jquery.multiselect2side/dist/css/jquery.multiselect2side.css"  type="text/css">
<link rel="stylesheet" href="/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css" type="text/css"/>
<script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
<script src="/asset/js/ajax.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="/vendor/doT/doT.min.js"></script>
<script src="/vendor/igrowl/dist/js/igrowl.min.js"></script>
<script src="/vendor/Echart/dist/echarts.js"></script>
<link rel="stylesheet" href="/vendor/slider/slider.css" type="text/css"/>
<body>
<div class="app app-header-fixed  app-aside-fixed">
    <header id="header" class="app-header navbar bg-black">
        <div class="container-fluid">
            <div class="navbar-header" style="width:300px;">
                <a class="navbar-brand text-lt" href="/">
                    计划停电系统
                </a>
                    <span class="text-md" style="color:#fff;">
                        <i class="fa fa-ellipsis-v m-r-md"></i>注册
                    </span>
            </div>
        </div>
    </header>
    <div id="content" class="app-content" role="main">
        <div class="app-content-body">
            <div class="wrapper-lg m-t-lg">
                <div class="form-horizontal" name="form">
                    <div class="form-group first-step">
                        <label class="col-sm-3 control-label">
                            用户名
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="请输入用户名" ng-model="ctrl.domain" id="username" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            密码
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" placeholder="请输入密码" ng-model="ctrl.phone" id="password" required />
                        </div>
                    </div>
                    <div class="form-group third-step ">
                        <label class="col-sm-3 control-label">
                            确认密码
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-4">
                            <input type="password" id="confirmPwd" class="form-control" placeholder="请再次输入密码" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-offset-3 col-sm-4">
                            <a class="btn btn-success w-xs" id="subBtn">提交</a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('onblur','#confirmPwd',function(){
        console.log($.trim($("#confirmPwd").val())+'==='+$.trim($("#password").val()))
        if($.trim($("#confirmPwd").val())!= $.trim($("#password").val())){
            alert('密码不一致')
        }
    })
    $("#subBtn").click(function(){
        var username= $.trim($("#username").val());
        var password= $.trim($("#password").val());
        var confirmPwd=$.trim($("#confirmPwd").val());
        $.post('/register/create', {username:username,password:password},function(result){
            if(result.status=='success'){
                window.location.href=result.url;
            }else{
                alert(result.msg);
            }
        },'json');
    })
</script>
</body>