<html>
<head>
    <title>计划停电系统</title>
    <?php
    header("Access-Control-Allow-Origin：*");
    ?>
    <meta charset='utf-8'/>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
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
            height: 568px;
            margin:0 auto;
            background: #ccc;
        }
        .btm form
        {
        }
        .btm .line1
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
        .line1 .table1
        {
            width: 1200px;
            overflow: scroll;
            box-sizing:border-box;
            background: #fff;
        }
        .table1 td
        {
            padding: 0px 10px;

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
        textarea{resize:none;}

        .line3 div
        {
            width: 1190px;
            height: 40px;
            border-bottom: 1px solid #ddd;
            line-height: 40px;
            padding-left: 50px;
        }

        .line11 section
        {
            width: 340px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
        }
        .line12 section
        {
            width: 340px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
        }

        .line13 input
        {
            width: 1000px;height: 30px;line-height: 30px;
        }
        .line3 span
        {
            line-height: 30px;
            display: inline-block;
            height: 30px;
            position: relative;
            width: 100px;
            text-align: right;
            position: relative;
            top: 0px;
        }
        .line14 input[type='text']
        {
            height: 30px;
            width: 1000px;
        }
        .line15 select
        {
            margin-right: 200px;
        }
        .line4 input[type='button']
        {
            margin:0px 40px;
        }
        .line4
        {
            width: 1190px;
            margin:4px;
            border:1px solid #ddd;
        }
        input
        {
            height: 25px;line-height: 25px;
        }

    </style>
</head>
<body>
<div class="top" id='top'>
    <p>申请表录入</p>
    <p>历史记录查询</p>
</div>
<div class="btm" id='btm'>
    <form >
        <div class="line1">
            <table class='table1' border='0' cellspacing='0' cellpadding='0' id='table1'>
                <tr>
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
            <input type='button' value='上一条'>
            <input type='button' value='上一页'>
            <input type='button' value='前一条'>
            <input type='button' value='下一条' disabled>
            <input type='button' value='下一页' disabled>
            <input type='button' value='最后一条' disabled>
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'>
        </div>
        <div class="line3" id='line3'>
            <div class="line11">
                <section>
                    <span>填报单位</span>
                    <input type='text' id='a0'>
                </section>
                <section>
                    <span>填报日期</span>
                    <input type='text' id='a1'>
                </section>
                <section>
                    <span>停电设备名称</span>
                    <input type='text' id='a2'>
                </section>
            </div>
            <div class="line12">

                <section>
                    <span>停电开始时间</span>
                    <input type='text' id='a3'>
                </section>
                <section>
                    <span>停电结束时间</span>
                    <input type='text' id='a4'>
                </section>
                <section>
                    <span>停电线路名称</span>
                    <input type='text' id='a5'>
                </section>

            </div>
            <div class="line13" id='line13'>
                <span id='text_span'>检修内容</span>
                <input type='text' id='a6' />
            </div>
            <div class="line14">
                <span>备注</span>
                <input type='text' id='a7'>
            </div>
            <div class="line15">
                <span>负责人</span>
                <input type='text' id='a8'>
                <span>填报人</span>
                <input type='text' id='a9'>
            </div>
        </div>
        <div class="line4">
            <input type='button' value='增加' id='add'>
            <input type='button' id="change" value='修改'>
            <input type='button' value='取消' >
            <input type='button' value='保存' >
            <input type='button' value='删除'>
            <input type='button' value='打印'>
            <input type='button' value='下一步' onclick="window.open('/firstApproval')"/>
            <input type='button' value='返回'>
        </div>
    </form>
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
    }
</script>
<script type="text/javascript">
    var oTable1 = document.getElementById("table1");
    var oLine3 = document.getElementById("line3");
    var oLine3Input = oLine3.getElementsByTagName("input")
    var oAddBtn = document.getElementById('add')
    //alert(oLine3Input.length) 9个input分别代表上面table中九个td的内容。
    var addArr = []
    var idNum =0;
    oAddBtn.onclick = function ()
    {
        addMes();
        console.log(addArr)
        var url ="/apply/addApply";
        $.ajax({
            type:'post',
            url :'/apply/addApply',
            data:{
                "department":$("#a0").val(),
                "createTime":$("#a1").val(),
                "mechineNmae":$("#a2").val(),
                "startTime":$("#a3").val(),
                "stopTime":$("#a4").val(),
                "lineName":$("#a5").val(),
                "description":$("#a6").val(),
                "comments":$("#a7").val(),
                "owner":$("#a8").val(),
                "applyUser":$("#a9").val()
            },
            success:function (str){console.log(str)}
        })

        addArr.length =0;
    }
    function addMes()
    {
        var oTr = '<tr>'
        for(var j =0;j<oLine3Input.length;j++)
        {
            //console.log(oLine3Input[j].value)
            oTr+= '<td>'+oLine3Input[j].value+'</td>'
        }
        oTr+='</tr>'
        oTable1.innerHTML += oTr ;

        var oTable = document.getElementById("table1")
        var oTer = oTable.getElementsByTagName("tr")
        for(var i=0;i<oTer.length;i++)
        {
            oTer[i].index = i;
            oTer[i].onclick = function ()
            {
                var father = this.parentNode.parentNode
                alert(this.index)
            }
        }
    }

</script>
<script type="text/javascript">
    window.onload  = showMes();
    var oTable = document.getElementById("table1")
    function showMes()
    {
        $.ajax({
            url:'/getApplies',
            success:function (str)
            {
                for(var i=0;i<str.applies.length;i++)
                {
                    //str.applies[i].department
                    var oTr = '<tr name>'
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
                    oTable1.innerHTML +=oTr
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
                        for(var j=0;j<oTr.length;j++)
                        {
                            oTr[j].style.background ='#fff'
                        }
                        oTr[this.index].style.background ='#ddd'

                        var oTd = oTr[this.index].getElementsByTagName('td')
                        for(var j =0;j<oLine3Input.length;j++)
                        {
                            oLine3Input[j].value = oTd[j].innerHTML
                        }
                        //console.log(oTd.length)
                    }
                }
            }
        })
    }
</script>

<script type="text/javascript">
    var oLine3 = document.getElementById('line3')
    var oLine3Input = oLine3.getElementsByTagName('input')
    var oChange = document.getElementById('change')
    var oTable = document.getElementById('table1')
    oChange.onclick = function ()
    {
        $.ajax({
            url:'/apply/alterApply',
            method:'post',
            data:
            {
                "department":$("#a0").val(),
                "createTime":$("#a1").val(),
                "mechineNmae":$("#a2").val(),
                "startTime":$("#a3").val(),
                "stopTime":$("#a4").val(),
                "lineName":$("#a5").val(),
                "description":$("#a6").val(),
                "comments":$("#a7").val(),
                "owner":$("#a8").val(),
                "applyUser":$("#a9").val()
            },
            success:function (str){console.log(str)}
        })
    }
</script>


</body>
</html>
