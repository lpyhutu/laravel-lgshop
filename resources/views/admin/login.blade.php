<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <script type="text/javascript" src="{{ asset('js/loginCheck.js') }}"></script>
    <title>乐GO后台管理</title>
</head>

<body>

    <div id="logo">
        <h1><img src="{{asset('images/LeGo.png')}}" width="130" height="80" />乐GO后台登陆界面</h1>
        <div id="relogo">
            <a href="{{url('front/index')}}"><span>返回客户端</span></a>
            <a href="{{url('admin/register')}}"><span>注册</span></a>
        </div>
        <form action="admincheck" method="get" onsubmit="return checkAll()">
            <p>用户名：
                <input name="name" type="text" id="username" onblur="checkUser()" /><span style="color: red" id="user_tip"></span>
            </p>
            <p>
                密码：
                <input name="password" type="password" id="password" style="margin-left:11px;" onblur="checkPwd()" /><span style="color: red" id="pwd_tip"></span>
            </p>
            <p>
                验证码：
                <input name="checkCode" type="text" style=" width:70px;" />
                <img width="60" src="{{ url('front/code') }}" onclick="this.src='{{ url('front/code')}}?'+Math.random();" title="点击刷新">
            </p>
            <input name="ok" type="submit" style="background:url({{asset('images/denglu.gif')}}); border:0px; width:61px ; height:29px;  margin-left:60px;" value="登录" />
            <input type="reset" style="background:url({{asset('images/denglu.gif')}});width:61px; border:0px;   height:29px; margin-left:30px; " value="重置" />
        </form>
    </div>

</body>

</html>