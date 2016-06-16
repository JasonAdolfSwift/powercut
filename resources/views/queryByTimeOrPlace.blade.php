<html>
<head>
    <title>query</title>
    <meta charset='utf-8'>
    <script type="text/javascript" src="/vendor/jquery/dist/jquery.js"></script>
    <script src="/asset/js/ajax.js"></script>
    <style type="text/css">
        body{margin:0px;padding: 0px;}
        *{margin:0px;padding: 0px; box-sizing:border-box;}
        .header
        {
            width: 1200px;height: 100px;line-height: 100px; color: #333; font-family: "楷体" ;margin:0 auto; font-size: 70px;
            text-align: center;border-bottom: 1px solid #ddd;
        }
        .query
        {
            width: 1200px;height: 50px;margin:0 auto;
            line-height: 50px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .query select{
            width: 120px;height: 25px;font-size: 15px;
        }
        .query input
        {
            width: 120px; height: 25px; font-size: 15px;
        }
        .query span
        {
            display: inline-block; width: 50px;text-align: center;
        }
        .query section
        {
            width: 393px; height: 50px; display: inline-block; border:1px solid #ddd; position: relative;text-align: center;margin: 0px;padding: 0px;
        }
        .query input[type='button']
        {
            width: 120px;height: 30px;line-height: 30px;text-align: center; background: #ddd; border:none; position: relative; top: 10px;border-radius: 5px;cursor: pointer;
        }
        #spc
        {
            position: relative; top: -11px;
        }
        .show
        {
            width: 1200px;
            margin:0 auto;
        }
        .table1
        {
            width: 1200px;
            border-collapse: collapse;
        }
        .table1 tr td
        {
            padding: 10px;text-align: center;
            border:1px solid #ddd;
        }
        .table0
        {
            width: 1200px;
            border-collapse: collapse;
        }
        .table0 tr td
        {
            padding: 10px;text-align: center;
            border:1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="header">
    停电记录查询
</div>
<div class="query">
    <section>
        <span>类型</span>
        <select id='aaa'>
            <option value='time'>时间</option>
            <option value='place'>地点</option>
        </select>
    </section>
    <section>
        <span>关键字</span>
        <input type='text' id='keyword'/>
    </section>
    <section id='spc'>
        <input type='button' value='查询' id='query'>
    </section>
</div>
<div class="show">
    <table class='table1' border='0' cellspacing='0' cellpadding='0' id='table0'>
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
        </tr>

    </table>

    <table class='table1' border='0' cellspacing='0' cellpadding='0' id='table1'>


    </table>
</div>
<script type="text/javascript">
    var oTable1 = document.getElementById('table1')
    var oTr = oTable1.getElementsByTagName('tr')
    $("#query").click(function ()
    {

        $.ajax({
            url:'/apply/queryByPlaceOrTime',
            method:'get',
            data:{
                "type":$("#aaa").val(),
                "param":$("#keyword").val()
            },
            success:function (str)
            {
                var oTable1 = document.getElementById('table1')
                var oTr = oTable1.getElementsByTagName('tr')
                if (str.count ==0) { alert("数据为空！")};
                oTable1.innerHTML =''
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
                    oTr+= '<td>'+str.applies[i].description+'</td>'
                    oTr+= '<td>'+str.applies[i].comments+'</td>'
                    oTr+= '<td>'+str.ownerName+'</td>'
                    oTr+= '</tr>'
                    oTable1.innerHTML +=oTr
                }
            }
        })
    })
</script>
</body>
</html>