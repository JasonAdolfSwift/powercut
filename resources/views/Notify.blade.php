<html>
<head>
    <meta charset='utf-8'/>
    <title>用户停电通知</title>
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
        .btm .line1
        {
            width: 1200px;
            height: 350px;
            box-sizing:border-box;
            margin:0px 1px 1px 2px;
            border:2px solid #ddd;
            border-radius: 5px;
            overflow: scroll;
            display: inline-block;float: left;
            position: relative; left: 0px;
            background: #fff;
            padding: 2px;
        }
        .line1 .table1
        {
            width: 1200px;
            overflow: scroll;
            box-sizing:border-box;
            background: #fff;
        }
        .line1 .table1 tr
        {
            height: 30px;
            line-height: 30px;
            text-align: center;
        }
        .line1 .table1 tr td
        {
            border:1px solid #ddd;

        }

        .t1
        {
            height: 198px;
        }
        .t2
        {
            height: 108px;
        }
        .btm .line3
        {
            width: 1190px;
            height: 50px;
            line-height: 50px;
            border:1px solid #ddd;
            box-sizing:border-box;
            clear: left;
            margin:4px;
        }
        .line3 input
        {
            height: 30px;
            line-height: 30px;
            width: 60px;
            box-sizing:border-box;
            cursor: pointer;
            margin:0px 40px;
        }
        .btm .line4
        {
            width: 1190px;
            border:1px solid #ddd;
            box-sizing:border-box;
            margin:4px;
        }

        .line4 select
        {
            display: inline-block;
            width: 100px;
            height: 25px;
            line-height: 25px;
        }
        .line12 section
        {display: inline-block;

            width: 550px;
        }
        .line12 section input{width: 315px;}
        .line4 input
        {
            height: 25px;
            width: 150px;
            line-height: 25px;
        }
        #short
        {
            width: 100px;
        }
        .line4 div
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
        }
        .line4 span
        {
            display: inline-block;
            width: 98px;
            text-align: right;
        }
        .btm .line5
        {
            width: 1190px;
            height: 40px;
            line-height: 40px;
            border:1px solid #ddd;
            box-sizing:border-box;
            clear: left;margin:4px;text-align:center;

        }
        .line5 input
        {

            width: 60px;
            height: 30px;
            margin:0px 32px;
            line-height: 30px;
        }
        .clearfix{clear: both}
    </style>
</head>
<body>
<section class="top" id='top'>
    <p>申请表录人</p>
    <p>历史记录查询</p>
</section>
<section class="btm" id='btm'>
    <form class='page1' style='display:block'>
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

            </table></div>

        <div class="clearfix"></div>
        <div class="line4" id='line3'>
            <div class="line11">
                <span>编号</span>
                <input type='text' id='ddd' disabled="true">
                <span>停电原因</span>
                <input type='text' disabled="true">
            </div>
            <div class="line12">
                <section>
                    <span>停电开始时间</span>
                    <input type='text' disabled="true">
                </section>
                <section>
                    <span>停电结束时间</span>
                    <input type='text' disabled="true">
                </section>
            </div>
            <div class="line13">
                <span>被通知用户</span>
                <input type='text' id='tell' disabled="true"/>
                <span>通知人</span>
                <select id='tellman'>
                </select>

            </div>
            <div class="line14">
                <span>备注</span>
                <input type='text' disabled="true">
            </div>
        </div>
        <div class="line5">
            <input type='button' value='通知' id='notify'>

    </form>
    <form class='page2'>历史申请界面</form>
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
    var oTable = document.getElementById('table1')
    window.onload = showMsg()
    function showMsg(){
        $.ajax({
            url:'/apply/showApproved',
            success:function (str)
            {
                var oTable = document.getElementById('table1')
                for(var i=0;i<str.applies.length;i++)
                {
                    //str.applies[i].department
                    var oTr = '<tr>'
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
                var oLine3Input = oLine3.getElementsByTagName('input')

                for(var i=0;i<oTr.length;i++)
                {
                    oTr[i].index = i;
                    for(var j=0;j<str.applies.length;j++)
                    {
                        oTr[i].name = str.applies[j].id
                    }
                    oTr[i].onclick = function ()
                    {
                        var oTellMan = document.getElementById('tellman');
                        oTellMan.options.length =0;
                        for(var j=0;j<oTr.length;j++)
                        {
                            oTr[j].style.background ='#fff'
                        }
                        oTr[this.index].style.background ='#ddd'

                        var oTd = oTr[this.index].getElementsByTagName('td')
                        oLine3Input[0].value = oTd[0].innerHTML
                        oLine3Input[1].value = oTd[8].innerHTML
                        oLine3Input[2].value = oTd[4].innerHTML
                        oLine3Input[3].value = oTd[5].innerHTML
                        oLine3Input[4].value = oTd[1].innerHTML
                        oLine3Input[5].value = oTd[9].innerHTML
                        $.ajax({
                            url:'/getUserByDepartment',
                            method:'get',
                            data:{
                                "department":$("#tell").val()
                            },
                            success:function (str)
                            {
                                var aa
                                //	console.log(str)
                                for(var i =0;i<str.users.length;i++)
                                {

                                    oTellMan.options.add(new Option(str.users[i].chinese))
                                    //		console.log(str.users[i].chinese)
                                    aa = str.users[i].id
                                }
                                $("#notify").click(function ()
                                {
                                    $.ajax({
                                        url:'/apply/setNotify',
                                        method:'post',
                                        data:{
                                            "applyId":$("#ddd").val(),
                                            "userId":aa
                                        },
                                        success:function (str)
                                        {
                                            alert(str.msg)
                                            location.reload()
                                        }
                                    })
                                })
                            }
                        })
                        //console.log(oTd.length)
                    }
                }
            }
        })
    }
</script>
<script type="text/javascript">

</script>
</body>
</html>