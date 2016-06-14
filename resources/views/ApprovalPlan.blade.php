<html>
<head>
    <meta charset='utf-8'/>
    <title>停电计划审批</title>
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
        .line3 section
        {
            height: 40px;
            line-height: 40px;
            border-bottom: 1px solid #ddd;
            padding-left: 45px;
        }
        .line3 p
        {
            display: inline-block;
            position: relative;
            top: -13px;
            width: 100px;
            text-align: right;
        }
        .line3 span
        {
            width: 400px;
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
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
        .line4 section
        {
            display: inline-block;
            border:1px solid #ddd;
            width: 180px;
            text-align: center;
            margin:0px 5px;
            height: 40px;
        }
        .line4 select
        {
            width: 120px;
            height: 25px;
            position: relative;
            top: -5px;
        }
        .line4 span
        {
            display: inline-block;
            position: relative;
            top: -5px;
        }
        .line4 input
        {
            position: relative;
            top: -7px;
        }
        .line5
        {
            height: 40px;
            line-height: 40px;
        }
        .line5 input
        {
            margin:0px 65px;
        }
    </style>
</head>
<body>
<div class="top" id='top'>
    <p>申请表录入</p>
    <p>历史记录查询</p>
</div>
<div class="btm" id='btm'>
    <form style='display:block'>
        <div class="line1">
            <table border='0' cellpadding='0' cellspacing='0' class='table1'>
                <tr>
                    <td>申请单位</td>
                    <td>停电设备名称</td>
                    <td>停电起止时间</td>
                    <td>制表人</td>
                    <td>审核人</td>
                    <td>审检人</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="line2">
            <input type='button' value='上一条' >
            <input type='button' value='上一页' >
            <input type='button' value='前一条' >
            <input type='button' value='下一条' >
            <input type='button' value='下一页' >
            <input type='button' value='最后一条' >
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'>
        </div>
        <div class="line3">
            <section class="line11">
                <p>申请单位</p>
                <span></span>
                <p>停电设备名称</p>
                <span></span>
            </section>
            <section class="line12">
                <p>检修安装内容</p>
                <span></span>
            </section>
            <section class="line13">
                <p>停电起止时间</p>
                <span></span>
            </section>
            <section class="line14">
                <p>停电范围</p>
                <span></span>
            </section>
            <section class="line15">
                <p>备注</p>
                <span></span>
            </section>
            <section class="line16">
                <p>制表人</p>
                <span></span>
            </section>
        </div>
        <div class="line4">
            <section class="row1">
                <div>
                    <span>审核人</span>
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </section>
            <section class="row2">
                <div>
                    <input type='button' value='审核'>
                    <input type='button' value='存盘' disabled='disable'>
                </div>
            </section>
            <section class="row3">
                <div>
                    <span>审核人</span>
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </section>
            <section class="row4">
                <div>
                    <input type='button' value='审核'>
                    <input type='button' value='存盘' disabled='disable'>
                </div>
            </section>
            <section class="row5">
                <div>
                    <span>审核人</span>
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </section>
            <section class="row6">
                <div>
                    <input type='button' value='审核'>
                    <input type='button' value='存盘' disabled='disable'>
                </div>
            </section>
        </div>
        <div class="line5">
            <input type='button' value='删除'>
            <input type='button' value='打印'>
            <input type='button' value='上一步'>
            <input type='button' value='两票'>
            <input type='button' value='不同意'>
            <input type='button' value='返回'>
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
</body>
</html>