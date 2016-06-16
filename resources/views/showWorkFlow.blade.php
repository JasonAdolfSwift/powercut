<html>
<head>
    <title>图片1</title>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <style type="text/css">
        *{margin: 0px;padding: 0px;}
        html,body{width: 100%;height: 100%;position: relative;}

        .content
        {
            width: 100%;height: 100%;
            background: url(/images/bg.png);
            background-repeat: no-repeat;
            background-size:cover;
            position: relative;
        }
        .header
        {
            width: 100%;height: 100px;line-height: 100px; font-size: 70px; font-family: "楷体";color: #fff;font-weight: bold;letter-spacing: 0.1em;
            text-align: center;
        }

        .line1
        {
            width: 100%;text-align: center;margin-top: 100px;	}
        .line1 div
        {

            width: 150px;height: 150px;border-radius: 5px;display: inline-block;
            font-size: 14px;position: relative; line-height: 150px;

            box-shadow: 0px 0px 2px #fff;

            transition:all 1s ease;
        }

        .line1 div:hover
        {

            box-shadow:  0px  0px 2px red;
            cursor: pointer;




        }

        .line1 div p
        {
            position: absolute;bottom:0px; line-height: 50px; text-align: center; width: 150px;color: #fff
        ;
        }
        .img1
        {
            background: url(/images/water/bg3.1.png);
            background-size: cover;margin-left: 10px;
        }
        .img2
        {
            background: url(/images/water/bg3.2.png);background-repeat: no-repeat;
        }
        .img3
        {background: url(/images/water/bg3.3.png);background-repeat:no-repeat;}
        .img4
        {background: url(/images/water/bg3.4.png);background-repeat:no-repeat;}
        .img5
        {box-shadow: 0px 0px 2px red;
            line-height: 200px;text-align: center;line-height: 150px;
        }
        .img5  p {font-size: 20px; text-shadow:0px 0px 5px #fff;


        }
        .img6
        {background: url(/images/water/bg3.6.png);background-repeat:no-repeat;}

        .line1 section
        {
            width:60px;height:60px;
            background: url(/images/arrow.png);display: inline-block;
            background-size: cover;
            position: relative; top: -40px;
        }
        #arrow3
        {
            position: relative; top: -60px;
        }
        #arrow4
        {
            transform:rotate(180deg);
            position: relative;display: inline-block; left: -70px;top: -20px;
        }
        #img5
        {
            position: relative; left: -70px;
        }
        #arrow6{
            position: relative;left: -70px;
        }
        #img6
        {
            position: relative; left: -70px;
        }




    </style>
    <meta charset='utf-8'/>
</head>
<body>
<div class="content">
    <section class="header">计划停电工作流程</section>

    <div class="line1">
        <div class="img1" id='img1'><p>上报《月度停电计划》</p></div>
        <section class="arrow1"></section>
        <div class="img2" id='img2'><p>下发停电计划</p></div>
        <section class="arrow2"></section>
        <div class="img3" id='img3'><p>单项上报审批</p></div>
        <section class="arrow3"></section>
        <div class="img4" id='img4'><p>审批</p></div>
        <section class="arrow4" id='arrow3'></section>
        <section class="arrow4" id='arrow4'></section>
        <div class="img5" id='img5'><p>同意停电将审批单上报调度</p></div>
        <section class="arrow5" id='arrow6'></section>
        <div class="img6" id='img6'><p>停电通知客户</p></div>
    </div>
</div>
<script type="text/javascript">
    $("#img1").click(function ()
    {
        location.href='/showPlan'
    })
    $("#img2").click(function ()
    {
        location.href='/firstApproval'
    })
    $("#img3").click(function ()
    {
        location.href='/getSubmitPlan'
    })
    $("#img4").click(function ()
    {
        location.href='/getFinalApproval'
    })

    $("#img6").click(function ()
    {
        location.href='/getNotify'
    })

</script>
</body>
</html>