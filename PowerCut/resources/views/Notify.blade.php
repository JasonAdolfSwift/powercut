<html>
<head>
    <meta charset='utf-8'/>
    <title>用户停电通知表</title>
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
            height: 329px;
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
        .line4 input
        {
            height: 25px;
            width: 1000px;
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
            clear: left;
            margin: 4px;
        }
        .line5 input
        {

            width: 60px;
            height: 30px;
            margin:0px 32px;
            position: relative;
            top: -3px;
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
                    <td>记录来源</td>
                    <td>停电起止时间</td>
                    <td>被通知用户</td>
                    <td>通知人</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table></div>
        <div class="line2">
            <div class="e1">
                <p>停电原因</p>
                <textarea class='t1'></textarea>
            </div>
        </div>
        <div class="line3">
            <input type='button' value='上一条' disabled='disabled'>
            <input type='button' value='上一页' disabled='disabled'>
            <input type='button' value='前一条' disabled='disabled'>
            <input type='button' value='下一条' disabled='disabled'>
            <input type='button' value='下一页' disabled='disabled'>
            <input type='button' value='最后一条' disabled='disabled'>
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'>
        </div>
        <div class="line4">
            <div class="line11">
                <span>停电原因</span>
                <input type='text'>
            </div>
            <div class="line12">
                <span>停电起止时间</span>
                <select class='date'>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option></select>
                <select class='time'>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option></select>
                ——————
                <select class='date'>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option></select>
                <select class='time'>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option></select>
            </div>
            <div class="line13">
                <span>被通知用户</span>
                <input type='text' id='short'/>
                <span>通知人</span>
                <select>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
                <span>通知方式</span>
                <select>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </div>
            <div class="line14">
                <span>备注</span>
                <input type='text'>
            </div>
        </div>
        <div class="line5">
            <input type='button' value='增加'>
            <input type='button' value='修改' disabled='disabled'>
            <input type='button' value='取消' disabled='disabled'>
            <input type='button' value='存盘' disabled='disabled'>
            <input type='button' value='删除' disabled='disabled'>
            <input type='button' value='打印'>
            <input type='button' value='上一步'>
            <input type='button' value='归档' disabled='disabled'>
            <input type='button' value='返回'>
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

</body>
</html>