<html>
<head>
    <meta charset='utf-8'/>
    <title>初审</title>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <style type="text/css">
        *{margin:0px;padding:0px;box-sizing:border-box;}
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
            width: 1000px;
            height: 350px;
            box-sizing:border-box;
            margin:0px 1px 1px 2px;
            border:2px solid #ddd;
            border-radius: 5px;
            overflow: scroll;
            float: left;
            background: #fff;
            padding: 2px;
        }
        .line1 .table1
        {
            width: 1000px;
            overflow: scroll;
            box-sizing:border-box;
            background: #fff;
        }
        .line1 .table1 tr
        {
            height: 30px;
            width: 1000px;
            line-height: 30px;
            text-align: center;
        }
        .line1 .table1 tr td
        {
            border:1px solid #ddd;
            width: 10em;
        }
        .btm .line2
        {
            width: 196px;
            height: 350px;
            background: #fff;
            float: left;
            box-sizing:border-box;
            border:2px solid #ddd;
            padding: 2px;
            margin-bottom: 2px;
        }
        .line2 p
        {
            width: 192px;
            height: 20px;
            line-height: 20px;
            background: #ddd;
            text-align: center;
            box-sizing:border-box;
            margin-left: -2px;
            margin-top: -2px;
        }
        .line2 textarea
        {
            padding: 2px;
            box-sizing:border-box;
            width: 190px;
            overflow-y:scroll;
            font-size: 14px;
            border:none;
            outline: none;
            resize:none;
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
            padding-left: 10px;
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
        select{height: 25px;line-height: 25px;width: 100px;}
        .btm .line4
        {
            width: 1190px;
            height: 50px;
            line-height: 50px;
            border:1px solid #ddd;
            box-sizing:border-box;
            margin:4px;
            padding-left: 200px;
        }
        .line4 .s1
        {
            display: inline-block;
            margin-left: 100px;
        }
        .line4 .s1 input
        {
            margin-right: 10px;
        }
        .line4  p
        {
            display: inline-block;
            margin-left: -100px;
        }
        .line4 select{
            display: inline-block;

        }
        .s1
        {
            width: 150px;
        }
        .t2
        {
            width: 150px;
            display: inline-block;
        }
        .t3
        {
            width: 200px;
            display: inline-block;
        }
        #Btn1
        {
            width: 60px;
            height: 30px;
            line-height: 30px;
        }
        .btm .line5
        {
            width: 1190px;
            height: 50px;
            line-height: 50px;
            border:1px solid #ddd;
            box-sizing:border-box;
            clear: left;
            margin: 4px;
            text-align: center;
        }
        .line5 section
        {
            display: inline-block;
            width: 30%;
            height: 44px;
            line-height: 46px;
            display: inline-block;
            margin:2px 2px;
            border:1px solid #ddd;
            text-align: center;
            box-sizing:border-box;
        }
        .line5 input
        {
            width: 60px;
            height: 30px;
        }
        .line5 select
        {
            height: 25px;
            line-height: 25px;
            margin-top:-2px;
        }
        .btm .line6
        {
            width: 1196px;
            height: 50px;
            line-height: 50px;
            border:1px solid #ddd;
            box-sizing:border-box;
            clear: left;
            margin: 2px;
        }
        .line6 input
        {
            width: 60px;
            height: 30px;
            line-height: 50px;
            float: right;
            margin:10px 20px;
        }
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
                    <td>选择</td>
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

            </table></div>
        <div class="line2">
            <div class="e1">
                <p>检修内容</p>
                <textarea class='t1' id='t1'></textarea>
            </div>
            <div class="e2">
                <p>备注内容</p>
                <textarea class='t2' id='t2'></textarea>
            </div></div>

        <div class="line5">
            <section class="item1">
                <span>审批人</span>
                <select id='approval'>

                </select>
            </section>
            <section class="item2">
                <input type='button' value='审批' id='approval1'>
                <input type='button' value='保存' id='save'>
            </section>
            <input type='button' id='saveId' value style='display:none'>

        </div>
        <div class="line6">
            <input type='button' value='打印'>
            <input type='button' value='下一步' id='backword'>
            <input type='button' value='上一步' id='forword'>
            <input type='button' value='返回' id='back'>
        </div>
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
    }
</script><!--控制顶部两个p点击下面两个form切换代码-->
<script type="text/javascript">
    window.onload = function ()
    {
        getMsg();
        getApprovalUser();

    }
    function getMsg()
    {
        $.ajax({
            url:'/showSaved',
            success:function (str)
            {
                var oTable = document.getElementById('table1')
                for(var i=0;i<str.applies.length;i++)
                {
                    //str.applies[i].department
                    var oTr = '<tr>'
                    oTr+= '<td>'+"<input type='checkbox'/>"+'</td>'
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
                var oTable = document.getElementById('table1');
                var oTr = document.getElementsByTagName('tr')
                var ot1 = document.getElementById('t1');
                var ot2 = document.getElementById('t2')
                var oSaveId = document.getElementById('saveId')
                //console.log(oTr.length)
                for(var i=0;i<oTr.length;i++)
                {
                    oTr[i].index = i;
                    oTr[i].onclick = function ()
                    {
                        for(var j=0;j<oTr.length;j++)
                        {
                            oTr[j].style.background ='#fff'
                        }
                        oTr[this.index].style.background ='#ddd'
                        ot1.innerHTML =''
                        ot1.innerHTML = str.applies[this.index-1].description
                        ot2.innerHTML =''
                        ot2.innerHTML = str.applies[this.index-1].comments
                        oSaveId.value = str.applies[this.index-1].id
                        //console.log(oTd.length)
                    }
                }
                var oApproval1 = document.getElementById('approval1')
                var oApproval = document.getElementById('approval')
                var oTable = document.getElementById('table1')
                var oRadio = oTable.getElementsByTagName('input')
                var arrId= []
                var arrApo = []
                //console.log(oRadio.length)

                oApproval1.onclick = function ()
                {
                    for(var m =0;m<oRadio.length;m++)
                    {
                        if (oRadio[m].checked)
                        {
                            arrId.push(oRadio[m].parentNode.nextSibling.innerHTML)
                        };
                    }
                    arrApo.push(oApproval.value)

                    $.ajax({
                        url:'/apply/firstApprovalApply',
                        method:'post',
                        data:
                        {
                            "applyIds":arrId,
                            "approvalUserName":arrApo
                        },
                        success:function(str)
                        {
                            alert(str.msg);
                            location.reload();

                        }
                    })
                }
            }
        })
    }
    function getApprovalUser()
    {
        var oApproval = document.getElementById('approval')
        $.ajax({
            url:'/getApprovalUser',
            success:function (str)
            {
                for(var i=0;i<str.approvalUser.length;i++)
                {
                    var options = '<option>';
                    options+= str.approvalUser[i];
                    options +='</option>'
                    oApproval.innerHTML+= options
                }
            }
        })
    }
</script>
<script type="text/javascript">
    var oBack = document.getElementById('back');
    oBack.onclick = function ()
    {
        window.location.href='/showWorkFlow'
    }
</script>
<script type="text/javascript">
    $("#save").click(function ()
    {
        $.ajax({
            url:'/apply/alterSavedApply',
            method:'post',
            data:
            {
                "description":$("#t1").val(),
                "comments":$("#t2").val(),
                "applyId":$("#saveId").val()
            },
            success:function (str)
            {
                location.reload();
                console.log(str)
            }
        })
    })
</script>
<script type="text/javascript">
    var oForword = document.getElementById('forword');
    var oBackword = document.getElementById('backword');
    //	<input type='button' value='上一步' id='forword'>
    //	<input type='button' value='下一步' id='backword'>
    oForword.onclick = function ()
    {
        window.location.href = '/showPlan'
    }
    oBackword.onclick = function ()
    {
        window.location.href ='/getSubmitPlan'
    }
</script>
</body>
</html>