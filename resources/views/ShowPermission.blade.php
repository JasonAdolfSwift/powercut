<html>
<head>
    <meta charset='utf-8'/>
    <script type="text/javascript" src='/vendor/jquery/dist/jquery.js'></script>
    <title>permission</title>
    <style type="text/css">
        *{margin:0px;padding: 0px;}
        .header
        {
            width: 1200px;height: 100px;line-height: 100px; color: #333; font-family: "楷体" ;margin:0 auto; font-size: 70px;
            text-align: center;border-bottom: 1px solid #ddd;
        }
        .wrapper
        {
            width: 1200px;height: 500px;margin:0 auto;text-align: center;margin-top: 10px;
        }
        .wrapper table
        {
            width: 1200px;margin:0 auto;border-collapse: collapse;
        }
        .wrapper table td
        {
            border:1px solid #ddd;
            padding: 10px 0px; text-align: center;
        }
    </style>
</head>
<body>
<p class="header">用户权限管理</p>
<div class="wrapper" id='show'>
    <table id='table1' cell-spacing='0' cell-padding='0'>
        @foreach($allUser as $user)
            <tr>
                <td id="userId{{$user->id}}">
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->chinese}}
                </td>
                <td>
                    {{$user->password}}
                </td>
                <td>
                    <select id="userType{{$user->id}}">
                        <option value="初审人" @if ($user->userType == 0) selected @endif>初审人</option>
                        <option value="普通用户" @if ($user->userType == 1) selected @endif>普通用户</option>
                        <option value="最终审批人" @if ($user->userType == 2) selected @endif>最终审批人</option>
                    </select>
                </td>
                <td>
                    {{$user->created_at}}
                </td>
                <td id="btns">
                    <button type="button" onclick="alter({{$user->id}})">更改</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<script>
    function alter(userId) {
        var id = "userId" + userId;
        var type = "userType" + userId;
        var userId = document.getElementById(id).innerHTML;
        var chinese = document.getElementById(type).value;
        userId = userId.trim();

        if (chinese == "初审人") {
                userType = "firstApproval";
            } else if (chinese == "普通用户") {
                userType = "common";
            } else {
                userType = "finalApproval";
            }
            $.ajax({
                url:'/alterUserPermission',
                method:'post',
                data:{
                    "userId":userId,
                    "permission": userType
                },
                success:function(str) {
                    alert(str.msg)
                }
            })
    }
</script>
</body>
</html>