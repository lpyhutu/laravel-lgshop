<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/front/login.css') }}">
    <script type="text/javascript" src="{{ asset('js/loginCheck.js') }}"></script>
    <title>登录页面</title>
</head>

<body>

    <div id="logo">
        <h1><img src="{{asset('images/leGo.gif')}}" width="115" height="52" />快来加入乐GO商城吧！</h1>
        <h1 id="h"> 各种精品等你来看个够。</h1>
        <p style="text-align:right; color: #0C0;">
            <a href="{{url('front/index')}}" style="color:#254B62">返回首页</a>
            &nbsp;<a href="{{url('admin/login')}}" style="color:#254B62">后台登陆</a>
            &nbsp;<a href="{{url('front/register')}}" style="color:#254B62">注册</a>
        </p>
        <form action="{{url('front/check')}}" method="get" onsubmit="return checkAll()">
            {{csrf_field()}}
            <p>用户名：
                <input name="username" type="text" id="username" onblur="checkUser()" /><span style="color: red" id="user_tip"></span>
            </p>
            <p>
                密&nbsp;码：
                <input name="password" type="password" id="password" onblur="checkPwd()" /><span style="color: red" id="pwd_tip"></span>
            </p>
            <p>
                验证码：
                <input name="checkCode" type="text" style="width: 80px" />
                <img style="padding-left: 0px" src="{{ url('front/code') }}" width="60" onclick="this.src='{{ url('front/code')}}?'+Math.random();" title="点击刷新">
            </p>
            <input name="ok" type="submit" style="background:url({{asset('images/login_btn2.gif')}}); width:99px ; height:36px;  margin-left:30px;" value="登录" id="ok" />
            <input name="" type="reset" style="background:url({{asset('images/login_btn3.gif')}})  ; width:97px ; height:36px; margin-left:30px; " value="重置" />
        </form>
    </div>
</body>

</html>