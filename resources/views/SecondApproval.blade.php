<html>
<head>
    <meta charset='utf-8'/>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <title>复审</title>
    <style type="text/css">
        *{margin:0px;padding:0px;box-sizing:border-box;}
        input[type='button']
        {
            width: 60px;
            height: 30px;
        }
        .top
        {
            width: 1200px;
            height: 50px;
            line-height: 50px;
            margin:0px auto;
            background: #ccc;
        }
        .top p
        {
            width: 596px;
            float: left;
            text-align: center;
            box-sizing:border-box;
            border:1px solid #ddd;
            font-size: 20px;
            line-height: 50px;
            cursor: pointer;
            border-radius: 2px;
            transition:all 1s ease;
            margin:2px;
        }
        .top p:hover
        {
            background: #ddd;
        }
        .btm
        {
            width: 1200px;
            margin:0 auto;
            background: #ccc;
        }
        .btm form
        {
            display: none;
        }
        .line1
        {
            width: 1190px;
            height: 250px;
            box-sizing:border-box;
            margin:0px 1px 1px 2px;
            border:2px solid #ddd;
            border-radius: 5px;
            overflow: scroll;
            background: #fff;
            padding: 2px;
            margin:2px;
        }
        .table1
        {
            width: 1200px;
            overflow: scroll;
            box-sizing:border-box;
            background: #fff;
        }
        .line1 .table1 tr
        {
            height: 30px;
            width: 1200px;
            line-height: 30px;
            text-align: center;
        }
        .line1 .table1 tr td
        {
            border:1px solid #ddd;
        }

        .line3{ width:1190px; position: relative;}
        .line3 section
        {
            height: 40px;
            line-height: 40px;

            display: inline-block;width: 40%;
        }
        #line3 section p
        {
            display: inline-block;
            position: relative;
            line-height: 40px;height: 40px;
            width: 100px;
            text-align: right;
        }

        #line3 span
        {
            width: 300px;
            height: 30px;
            line-height: 30px;
            margin:5px 0px;
            display: inline-block;
        }
        .line3 p
        {
            display: inline-block;
        }
        .line4
        {
            height: 50px;
            line-height: 50px;
            padding: 5px;width: 100%;text-align: center;border-bottom: 1px solid #ddd;
        }

        .line5
        {
            height: 40px;
            line-height: 40px;
            width: 100%; text-align: center;
        }
        .line5 input
        {
            margin:0px 45px;
        }
    </style>
</head>
<body>
<div class="top" id='top'>
    <p>申请表录人</p>
    <p>历史记录查询</p>
</div>
<div class="btm" id='btm'>
    <form style='display:block'>
        <div class="line1">
            <table border='0' cellpadding='0' cellspacing='0' class='table1' id='table1'>
                <tr>
                    <td>编号</td>
                    <td>填报单位</td>
                    <td>填报日期</td>
                    <td>停电设备名称</td>
                    <td>停电开始时间</td>
                    <td>停电结束时间</td>
                    <td>停电线路名称</td>
                    <td>停电范围</td>
                    <td>检修内容</td>
                    <td>备注</td>
                    <td>负责人</td>
                    <td>填报人</td>
                </tr>
            </table>
        </div>

        <div class="line3" id='line3'>
            <section>
                <p>编号</p>
                <span id='applyId'></span>
            </section>
            <section>
                <p>申请单位</p>
                <span></span>
            </section>
            <section>
                <p>填报日期</p>
                <span></span>
            </section>
            <section >
                <p>停电设备名称</p>
                <span></span>
            </section>
            <section>
                <p>停电开始时间</p>
                <span></span>
            </section>
            <section>
                <p>停电结束时间</p>
                <span></span>
            </section>
            <section>
                <p>停电线路名称</p>
                <span></span>
            </section>
            <section >
                <p>停电范围</p>
                <span></span>
            </section>
            <section>
                <p>检修内容</p>
                <span></span>
            </section>
            <section >
                <p>备注</p>
                <span></span>
            </section>
            <section>
                <p>制表人</p>
                <span></span>
            </section>
        </div>
        <div class="line4">
            <input type='button' value='同意' id='agree'>
            <input type='button' value='不同意' id='disagree'>
        </div>
        <div class="line5">
            <input type='button' value='打印' id='print'>

            <input type='button' value='上一步' id='backword'>

            <input type='button' value='下一步' id='forward'>

        </div>
    </form>
    <form>历史记录查询</form>
</div>


<script type="text/javascript">
    var oTop = document.getElementById('top');
    var oBtm = document.getElementById("btm");
    var aTopItem = oTop.getElementsByTagName('p');
    var aBtmItem = oBtm.getElementsByTagName('form')
    for(var i =0;i<aTopItem.length;i++)
    {
        aTopItem[i].index = i;
        aTopItem[i].onclick = function ()
        {
            for(var e =0;e<aBtmItem.length;e++)
            {
                aBtmItem[e].style.display='none'
            }
            aBtmItem[this.index].style.display ='block'
        }
    }</script><!--控制顶部两个p点击下面两个form切换代码-->
<script type="text/javascript">
    window.onload = showMsg();
    function showMsg()
    {
        $.ajax({
            url:'/apply/showSecondSaved',
            success:function (str)
            {
                var oTable = document.getElementById('table1')
                for(var i=0;i<str.applies.length;i++)
                {
                    //str.applies[i].department
                    if(str.applies[i].haveApproved== 1)
                    {
                        var oTr ="<tr style='color:red'>"
                    }
                    else {var oTr = '<tr>'}
                    oTr+= '<td>'+str.applies[i].id+'</td>'
                    oTr+= '<td>'+str.applies[i].department+'</td>'
                    oTr+= '<td>'+str.applies[i].createTime+'</td>'
                    oTr+= '<td>'+str.applies[i].machineName+'</td>'
                    oTr+= '<td>'+str.applies[i].startTime+'</td>'
                    oTr+= '<td>'+str.applies[i].stopTime+'</td>'
                    oTr+= '<td>'+str.applies[i].lineName+'</td>'
                    oTr+= '<td>'+str.applies[i].area+'</td>'
                    oTr+= '<td>'+str.applies[i].description+'</td>'
                    oTr+= '<td>'+str.applies[i].comments+'</td>'
                    oTr+= '<td>'+str.ownerName+'</td>'
                    oTr+= '</tr>'

                    oTable.innerHTML +=oTr
                }
                var oTable = document.getElementById("table1")
                var oTr = oTable.getElementsByTagName("tr")
                var oLine3 = document.getElementById('line3')
                var oLine3Input = oLine3.getElementsByTagName('span')

                for(var i=0;i<oTr.length;i++)
                {
                    oTr[i].index = i;
                    for(var j=0;j<str.applies.length;j++)
                    {
                        oTr[i].name = str.applies[j].id
                    }
                    oTr[i].onclick = function ()
                    {
                        for(var j=0;j<oTr.length;j++)
                        {
                            oTr[j].style.background ='#fff'
                        }
                        oTr[this.index].style.background ='#ddd'

                        var oTd = oTr[this.index].getElementsByTagName('td')
                        for(var j =0;j<oLine3Input.length;j++)
                        {
                            oLine3Input[j].innerHTML = oTd[j].innerHTML
                            oLine3Input[0].disabled = true;
                        }
                        //console.log(oTd.length)
                    }
                }
            }
        })
    }
</script>
<script type="text/javascript">
    $("#agree").click(function (){
        $.ajax({
            url:'/apply/finalApproval',
            method:'post',
            data:{
                "applyId":$("#applyId").html(),
                "operation":"true",
            },
            success:function (str)
            {
                alert(str.msg);
                location.reload()
            }
        })
    })
    $("#disagree").click(function (){
        $.ajax({
            url:'/apply/finalApproval',
            method:'post',
            data:{
                "applyId":$("#applyId").html(),
                "operation":"false",
            },
            success:function (str)
            {
                alert(str.msg);
                location.reload()
            }
        })
    })
    $("#forward").click(function ()
    {//图片4
        window.location.href='/getNotify'
    })
    $("#backword").click(function()
    {//图片6
        window.location.href ='/getSubmitPlan'
    })
</script>
</body>
</html>