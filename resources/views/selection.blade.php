<html>
<head>
    <title>系统模块</title>
    <meta charset='utf-8'>
    <style type="text/css">
        *{margin:0px;padding: 0px;}
        body{background: url(/images/33.png); background-size: cover;}

        .header
        {
            width: 100%;height: 100px;line-height: 100px; font-size: 70px; font-family: "楷体";color: #333;font-weight: bold;letter-spacing: 0.1em;
            text-align: center;
        }
        .line1
        {
            width: 496px;height: 367px;
            position: relative; right: 0px;
            border-radius: 10px;
            background: url(/images/222.png); background-repeat: no-repeat;
        }
        a{
            text-decoration: none;
            font-family: "楷体";
        }
        .left
        {
            width: 200px;
            display: inline-block;; font-size: 80px; padding: 20px;margin-top: 50px;margin-left: 200px;
            font-family: "楷体"
        }
        .left p{
            width: 80px;display: inline-block;
            font-size:70px;height: 320px;
        }

        .right
        {
            float: right;margin-right: 200px;margin-top: 160px;font-family: "楷体"
        }
        .p1
        {
            width: 200px;height: 50px;font-size: 50px; position: relative; top: 20px; left: 145px;
        }
        .p2
        {
            width: 200px;height: 50px;font-size: 50px;position: relative; top: 155px;left:-60px;
        }

        .p3
        {
            width: 200px;height: 50px;font-size: 50px;position: relative; top: 250px;left:145px;
            display:inline-block;
        }
    </style>
</head>
<body>
<div class="left">
    <p class='p1'>管理系统</p>
    <p class='p2'>计划停电</p>
</div>
<div class="right">
    <div class="line1">
        <a href="/permissionManage" class='p1'>用户管理</a>
        <a href="/showWorkFlow" class='p2'>停电管理</a>
        <a href="/queryPowCutRecord" class='p3'>查询管理</a>
    </div>
</div>
</body>
</html>