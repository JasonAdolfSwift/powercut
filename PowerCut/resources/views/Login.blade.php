<html>
<head>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<div>
    <div>
        <div ></div>
        <div >
            <h1 align="center">计划停电系统 </h1>
            <hr>
                <!-- <img src="/PearSon/public/lib/img/loginTitle.png" style="max-height:100px;width:100%;">-->
            <div name="form" align="center">
                <div>
                    <input type="text" placeholder="请输入用户名" autofocus id="username" style="height: 30px;width:200px">
                </div>
                <div>
                    <input type="password" placeholder="请输入密码" id="password" style="height: 30px;width:200px">
                </div>
                <button id="login" style="height:30px;width:100px;">登录</button>
                <div >
                    没有帐号?点击
                    <a href="/register" style="font-size: 14px">注册</a>
                </div>
                <div>
                    修改密码?点击
                    <a href="/alterPassword" style="font-size: 14px">修改密码</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $("#login").click(function(){
        $.post('/login', {username:$("#username").val(),password:$("#password").val()},function(result){
            if(result.status=='success'){
                window.location.href='/showPlan';
            }else{
                alert(result.msg);
            }
        },'json');
    })


</script>
</html>