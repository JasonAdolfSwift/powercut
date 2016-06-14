<html>
<head>
    <meta charset='utf-8'/>
    <title>计划停电单项上报审批</title>
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
            top: -13px;
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
            width: 500px;
            display: inline-block;
        }
        .line12
        {
            height: 60px;
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
            position: relative;
            top: -40px;
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
        .line14 textarea
        {
            width: 1000px;
            height: 30px;
            margin:5px 0px 0px 32px;

        }
        .line14 span
        {
            line-height: 30px;
            display: inline-block;
            height: 30px;
            position: relative;
            top: -16px;
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
            margin:5px 0px 5px 64px;
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
        .line16 select
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
            </table></div>
        <div class="line2">
            <input type='button' value='上一条' disabled='disabled'>
            <input type='button' value='上一页' disabled='disabled'>
            <input type='button' value='前一条' disabled='disabled'>
            <input type='button' value='下一条' disabled='disabled'>
            <input type='button' value='下一页' disabled='disabled'>
            <input type='button' value='最后一条' disabled='disabled'>
            <input type='button' value='标记'>
            <input type='button' value='回到标记' disabled='disabled'></div></div>
        <div class="line3">
            <section class="line11">
                <div>
                    <span>申请单位</span>
                    <i id='show1'></i>
                </div>
                <div>
                    <span>停电设备名称</span>
                    <i id='show2'></i>
                </div>
            </section>
            <section class="line12">
                <span>检修设备名称</span>
                <textarea></textarea>
            </section>
            <section class="line13">
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
            </section>
            <section class="line14">
                <span>停电范围</span>
                <textarea></textarea>
            </section>
            <section class="line15">
                <span>备注</span>
                <textarea></textarea>
            </section>
            <section class="line16">
                <span>制表人</span>
                <select>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
            </section>
        </div>
        <div class="line4">
            <input type='button' value='修改' disabled='disabled'/>
            <input type='button' value='取消' disabled='disabled'/>
            <input type='button' value='存盘' disabled='disabled'/>
            <input type='button' value='删除' disabled='disabled'/>
            <input type='button' value='打印'/>
            <input type='button' value='上一步'/>
            <input type='button' value='下一步'/>
            <input type='button' value='返回'/>
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
</body>
</html>