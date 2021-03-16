<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
    <script type="text/javascript" src="{{ asset('js/checkReg.js') }}"></script>
    <title>后台注册</title>
</head>

<body>

    <div id="logo" style="height: 400px;width:470px">
        <h1><img src="{{asset('images/LeGo.png')}}" width="130" height="80" />乐GO后台注册界面</h1>
        <div id="relogo">
            <a href="{{url('front/index')}}"><span>返回客户端</span></a>
            <a href="{{url('admin/login')}}"><span>登陆</span></a>
        </div>
        <form action="toregister" method="post" onsubmit="return registerAll()">
            {{csrf_field()}}
            <p>用&nbsp;户&nbsp;名：
                <input name="name" type="text" id="in_username" onblur="checkUser()" />
                <span id="username" style="color: red"></span>
            </p>
            <p>
                请输入密码：<input name="password" type="password" id="pwd" style="margin-left:11px;" onblur="checkPwd()" />
                <span id="passwords" style="color: red"></span>
            </p>
            <p>
                再输入密码：<input name="password" type="password" id="repwd" style="margin-left:11px;" onblur="checkRepwd()" />
                <span id="repasswords" style="color: red"></span>
            </p>
            <p>
                验&nbsp;证&nbsp;码：  <input name="checkCode" type="text" style=" width:70px;" />
                <img width="60" src="{{ url('front/code') }}" onclick="this.src='{{ url('front/code')}}?'+Math.random();" title="点击刷新">
            </p>

            <input name="ok" type="submit" style="background:url({{asset('images/denglu.gif')}}); border:0px; width:61px ; height:29px;  margin-left:90px;" value="注册" />
            <input type="reset" style="background:url({{asset('images/denglu.gif')}})  ; width:61px ; border:0px;   height:29px; margin-left:30px; " value="重置" />
        </form>
    </div>

</body>

</html>