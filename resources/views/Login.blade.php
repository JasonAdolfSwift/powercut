<html>
<head>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <meta charset='utf-8'>
    <style type="text/css">
        *{margin:0px;padding: 0px;box-sizing:border-box;}
        html,body{width: 100%;height: 100%;position: relative; font-family: "楷体"}
        .bg{width: 100%;height: 100%;background: url(/images/bg.jpg);background-size: cover;
        }
        .content
        {
            width: 560px;height: 300px;
            position: absolute;top: 50%;margin-top: -220px;
            left: 50%;margin-left: -300px;
            border-radius: 20px;
            padding: 20px;
            background: rgba(255,255,255,0.1);
        }
        h1{
            font-size: 40px;line-height: 40px;height: 40px;color: #fff;
            margin-bottom: 20px;
        }
        .content input

        {
            height: 40px;line-height: 40px;border-radius: 5px;
            margin:5px 0px;border: none;
            width: 220px;
            background: rgba(255,255,255,0.1);
            color: #fff;
            font-family: "楷体";

            font-size: 18px;
            text-indent: 1em;
        }
        .content  button
        {
            width: 220px;height: 40px; line-height: 0px;

            border:none; border-radius:5px;background:rgba(255,255,255,0); cursor: pointer;margin:10px 0px;
            font-size:18px; color: #fff;
            padding: 8px;
            font-family: "microsoft yahei";text-align: center;

            transition:all 1s ease;
        }
        .content button:hover
        {
            background:rgba(255,255,255,1);
        }
        .content a{ text-decoration: none; color: rgb(235,235,235);display: inline-block;
        }

    </style>

</head>
<body>
<div>
    <div class='bg'>
        <div></div>
        <div class='content' id='content'>
            <h1 align="center">计划停电软件管理系统 </h1>

            <!-- <img src="/PearSon/public/lib/img/loginTitle.png" style="max-height:100px;width:100%;">-->
            <div name="form" align="center">
                <div>
                    <input type="text" placeholder="请输入用户名" autofocus id="username">
                </div>
                <div>
                    <input type="password" placeholder="请输入密码" id="password">
                </div>
                <button id="login" >登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
                <div class='a1' style="color: #ffffff;">
                    没有帐号?点击<a href="/register" style="font-size: 14px;color:deepskyblue">注册</a>
                </div>
                <div style="color: #ffffff;">
                    修改密码?点击<a href="/alterPassword" style="font-size: 14px;color:deepskyblue">修改密码</a>
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
                window.location.href='/selection';
            }else{
                alert(result.msg);
            }
        },'json');
    })
</script>
<script type="text/javascript">
    var oContent = document.getElementById('content');
    var oConInput = oContent.getElementsByTagName('input')
    for(var i =0;i<oConInput.length;i++)
    {
        oConInput[i].onfocus = function ()

        {
            for(var j=0;j<oConInput.length;j++)
            {
                oConInput[j].style.border = 'none'
            }
            this.style.border ='1px solid #fff'
        }
    }
    oContent.onclick = null;
</script>
</html>