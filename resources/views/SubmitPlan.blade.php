<html>
<head>
    <meta charset='utf-8'/>
    <title>计划停电单项上报审批</title>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
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
            float: left;
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
        .line2
        {
            width: 1190px;
            height: 44px;
            line-height: 44px;
            border:1px solid #ddd;
            box-sizing:border-box;
            clear: left;
            margin:4px;
        }
        .line2 input
        {
            margin:0px 40px;
        }
        .line3
        {
            width: 1190px;
            border:1px solid #ddd;
            margin:4px;
        }
        .line11
        {
            width: 1190px;
            height: 40px;
            border-bottom: 1px solid #ddd;
            line-height: 40px;
            text-align: center;
            line-height: 40px;
        }
        .line11 span
        {
            line-height: 40px;
            display: inline-block;
            position: relative;

        }
        .line11 i
        {
            height: 30px;
            width: 200px;
            display: inline-block;
            margin:5px 0px;
        }
        .line11 div
        {
            width: 300px;
            display: inline-block;
        }
        .line12
        {height: 40px;line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line12 textarea
        {
            width: 1000px;
            height: 50px;
            margin:5px 0px;
        }
        .line12 span
        {
            line-height: 30px;
            display: inline-block;
            height: 30px;

        }
        .line13
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line13 select
        {

            width: 120px;
            height: 25px;line-height: 25px;
        }
        .line14
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line14 input
        {
            margin-left: 32px;
        }
        .line14 span
        {
            line-height: 30px;
            display: inline-block;
            height: 30px;

        }
        .line15
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line15 textarea
        {
            height: 30px;
            width: 1000px;
            margin:5px 0px 5px 32px;
            line-height: 30px;
        }
        .line15 span
        {
            line-height: 30px;
            display: inline-block;
            height: 30px;
            position: relative;
            top: -16px;
        }
        .line16
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line16 input
        {
            width: 120px;
            height: 25px;
            line-height: 25px;
            margin-left: 48px;
        }
        .line4
        {
            width: 1190px;
            height: 40px;
            line-height: 40px;
            border:1px solid #ddd;
            margin:4px;
        }
        .line4 input
        {
            margin:0px 40px;
        }
        input[type='text']
        {
            width: 140px;height: 25px;line-height: 25px; margin-right: 40px;
        }

        textarea{resize:none;}
    </style>
</head>
<body>
<section class="top" id='top'>
    <p>申请表录人</p>
    <p>历史记录查询</p>
</section>
<section class="btm" id='btm'>
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
                    <td>检修内容</td>
                    <td>备注</td>
                    <td>负责人</td>
                    <td>填报人</td>
                </tr>

            </table>
        </div>
        <div class="line2">
            <input type='button' value='上一条' disabled='disabled'>
            <input type='button' value='上一页' disabled='disabled'>
            <input type='button' value='前一条' disabled='disabled'>
            <input type='button' value='下一条' disabled='disabled'>
            <input type='button' value='下一页' disabled='disabled'>
            <input type='button' value='最后一条' disabled='disabled'>
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'>
        </div>
        <div class="line3" id='line3'>
            <section class="line11">
                <div>

                    <span>编号</span>
                    <input type='text' id='a10' disabled>
                </div>
                <div>

                    <span>申请单位</span>
                    <input type='text' id='a0'>
                </div>

                <div>
                    <span>填报日期</span>
                    <input type='text' id='a1'/>
                </div>

            </section>

            <section class="line13" >
                <span>停电设备名称</span>
                <input type='text' id='a3'/>
                <span>停电开始时间</span>
                <input type='text' id='a4'>
                <span>停电结束时间</span>
                <input type='text' id='a5'>
                <span>停电线路名称</span>
                <input type='text' id='a6'>
            </section>
            <section class="line14">
                <span>检修内容</span>
                <input type='text' id='a7'>
                <span>备注</span>
                <input type='text' id='a8'/>
                <span>负责人</span>
                <input type='text' id='a9'>
            </section>
            <section class="line15">
                <span>停电范围</span>
                <textarea id="area"></textarea>
            </section>
            <section class="line16">
                <span>制表人</span>
                <input type='text' id='owner' disabled>
            </section>
        </div>
        <div class="line4">
            <input type='button' value='修改' id='change'>
            <input type='button' value='取消' disabled='disabled'/>
            <input type='button' value='保存' id='save'/>
            <input type='button' value='删除' id='delete'/>
            <input type='button' value='打印' id='print'/>
            <input type='button' value='上一步'id='forword'/>
            <input type='button' value='下一步' id='backword'/>
            <input type='button' value='返回' id='back'/>
        </div>
    </form>
    <form>历史申请记录页面</form>
</section>
















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
    window.onload = showMsg;
    var oTable = document.getElementById("table1")
    var oTr = oTable.getElementsByTagName("tr")
    var oLine3 = document.getElementById('line3')
    var oLine3Input = oLine3.getElementsByTagName('input')

    function showMsg ()
    {
        $.ajax({
            url:'/apply/showAccepted',
            success:function(str)
            {
                for(var i=0;i<str.applies.length;i++)
                {
                    //str.applies[i].department
                    if(str.applies[i].status == 'reject')
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
                    oTr+= '<td>'+str.applies[i].description+'</td>'
                    oTr+= '<td>'+str.applies[i].comments+'</td>'
                    oTr+= '<td>'+str.ownerName+'</td>'
                    oTr+= '</tr>'
                    oTable.innerHTML +=oTr
                }
                var oTr = oTable.getElementsByTagName("tr")
                var oLine3 = document.getElementById('line3')
                var oLine3Input = oLine3.getElementsByTagName('input')
                var oArea = document.getElementById('area');
                var owner = document.getElementById('owner')
                for(var i=0;i<oTr.length;i++)
                {
                    oTr[i].index = i;

                    oTr[i].onclick = function ()
                    {
                        //         	console.log(oLine3Input.length)
                        for(var j=0;j<oTr.length;j++)
                        {
                            oTr[j].style.background ='#fff'
                        }
                        oTr[this.index].style.background ='#ddd'
                        var oTd = oTr[this.index].getElementsByTagName('td')
                        for(var j =0;j<oLine3Input.length-1;j++)
                        {
                            oLine3Input[j].value = oTd[j].innerHTML

                        }
                        //       console.log(this.index)
                        oArea.innerHTML = str.applies[this.index-1].area;
                        owner.value = str.ownerName
                    }        //consol
                }
            }
        })
    }
</script>

<script type="text/javascript">
    $("#change").click(function ()
    {
        $.ajax({
            url:'/apply/alterAcceptedApply',
            method:'post',
            data:
            {
                "department":$("#a0").val(),//申请单位
                "createTime":$("#a1").val(),//填报日期
                "machineName":$("#a3").val(),//停电设备名称
                "startTime":$("#a4").val(),//开始时间
                "stopTime":$("#a5").val(),//结束时间
                "lineName":$("#a6").val(),//停电线路名称
                "description":$("#a7").val(),//检修内容
                "comments":$("#a8").val(),//备注
                "ownerName":$("#a9").val(),//负责人
                "area":$("#area").val(),//停电范围
                "applyId":$("#a10").val()
            },

            success:function(str)
            {
                alert(str.msg);
                window.location.href='/getSubmitPlan'
            }
        })
    })

    $("#save").click(function()
    {
        $.ajax({
            url:'/apply/submitApply',
            method:'post',
            data:{
                "applyId":$("#a10").val()
            },
            success:function (str){
                alert(str.msg);
                window.location.href='/getSubmitPlan'}
        })
    })
    $("#delete").click(function()
    {	$.ajax({
        url:'/apply/deleteSubmitedAppply',
        method:'post',
        data:{
            "applyId":$("#a10").val()
        },
        success:function (str){
            alert(str.msg);
            window.location.href='/getSubmitPlan'}
    })
    })

    $("#forword").click(function()
    {//图片3
        window.location.href='/firstApproval'
    })
    $("#backword").click(function ()
    {//图片5
        window.location.href='/getFinalApproval'
    })

    $("#back").click(function ()
    {//图片5
        window.location.href='/showWorkFlow'
    })
</script>
</body>
</html>






