<html>
<head>
    <meta charset='utf-8'/>
    <title>3</title>
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
        }
        .line5 section
        {
            width: 285px;
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
    <p>申请表录入</p>
    <p>历史记录查询</p>
</section>
<section class="btm" id='btm'>
    <form class='page1' style='display:block'>
        <div class="line1">
            <table border='0' cellpadding='0' cellspacing='0' class='table1'>
                <tr>
                    <td>审批</td>
                    <td>审批人</td>
                    <td>批准人</td>
                    <td>填报单位</td>
                    <td>填报时间</td>
                </tr>
                <tr>
                    <td>
                        <input type='checkbox'/>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table></div>
        <div class="line2">
            <div class="e1">
                <p>检修内容</p>
                <textarea class='t1'></textarea>
            </div>
            <div class="e2">
                <p>备注内容</p>
                <textarea class='t2'></textarea>
            </div></div>
        <div class="line3">
            <input type='button' value='上一条'>
            <input type='button' value='上一页'>
            <input type='button' value='前一条'>
            <input type='button' value='下一条'>
            <input type='button' value='下一页'>
            <input type='button' value='最后一条'>
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'></div>
        {{--<div class="line4">--}}
            {{--<p>多条审批筛选信息栏</p>--}}
            {{--<div class="s1">--}}
                {{--<input type='checkbox'>填报日期--}}
            {{--</div>--}}
            {{--<div class="t2" id='t2'>--}}
                {{--<select>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<div class="t3" id='t3'>--}}
                {{--<select>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                    {{--<option></option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<input type='button' value='筛选' id='Btn1'></div>--}}
        <div class="line5">
            <section class="item1">
                <span>审批人</span>
                <select>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </section>
            <section class="item2">
                <input type='button' value='审批'>
                <input type='button' value='存盘' disabled='disabled'>
            </section>
            <section class="item3">
                <span>批准人</span>
                <select>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </section>
            <section class="item4">
                <input type='button' value='审批'>
                <input type='button' value='存盘' disabled='disabled'>
            </section>
        </div>
        <div class="line6">
            <input type='button' value='打印'>
            <input type='button' value='上一步'>
            <input type='button' value='下一步'>
            <input type='button' value='返回'>
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
    }</script><!--控制顶部两个p点击下面两个form切换代码-->
{{--<script type="text/javascript">--}}
    {{--var oT2 = document.getElementById('t2')--}}
    {{--var oT3 = document.getElementById('t3')--}}
    {{--var oT2biubiu = oT2.getElementsByTagName('select')[0]//10个开始时间--}}
    {{--var oT3biubiu = oT3.getElementsByTagName('select')[0]//10个结束时间--}}
    {{--for(var i =0;i<oT2biubiu.options.length;i++)--}}
    {{--{--}}
        {{--oT2biubiu.options[i].innerHTML = '2015-8'+'-'+(i+1);--}}
        {{--oT3biubiu.options[i].innerHTML = '2015-8'+'-'+(i+11);--}}
    {{--}--}}
    {{--//console.log(oT3biubiu.children.length)--}}
    {{--//逻辑应该是结束时间的最后一天，应该比开始的最早一天要小--}}
    {{--//假设所有的事情都发生在2015年的8月，那么开始时间就应该是8.1到8.10，结束时间就应该是8.11到8.20--}}
    {{--function addTime()--}}
    {{--{--}}
        {{--var nowYear = 2015;--}}
        {{--var nowMonth = 8;--}}
        {{--var nowDay =1;--}}
        {{--for(var i=0;i<oT2biubiu.length;i++)--}}
        {{--{--}}

        {{--}--}}
    {{--}</script><!---自动生成多条信息筛选框里面的起始时间以及结束时间->--}}
</body>
</html>