<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/front/header.css') }}">
    <script type="text/javascript" src="{{  asset('js/jquery-1.11.0.js')  }}"></script>

</head>


<body>
    <div id="header">
        <div id="login">
            <p> <span class="p1">
                    <a style="margin-right:5px;">欢迎你</a>
                    @if(session()->has('username'))
                    {{session()->get('username')}}
                    @else()
                    <a href="{{url('front\login')}}">
                        <img src="{{ asset('images/login1.gif') }}" />请登录</a>
                    <a href="{{url('front\register')}}">
                        <img src="{{ asset('images/login1.gif') }}" />免费注册</a>
                    @endif

                </span>
                <span class="p2">
                    <a href="{{url('front/collect')}}">
                        <img src="{{asset('images/login2.gif') }}" />收藏</a>
                    <a href="{{url('front/showCar')}}">
                        <img src="{{asset('images/login2.gif') }}" />购物车</a>
                    <a href="{{url('front/indent')}}"><img src="{{ asset('images/login2.gif') }}" />我的订单</a>
                    @if(session()->has('username'))
                    <span onclick="logout()">
                        <img src="{{ asset('images/login2.gif') }}" />退出</span>
                    @endif
                </span>
                <script>
                    function logout() {
                        if (confirm('是否退出登录！')) {
                            location.href = "logout";
                        }
                    }
                </script>
            </p>
        </div>
        <div id="logo">
            <h1><img src="{{ asset('images/LeGo.gif') }}" width="115" height="52" />各种好用的商品尽在乐GO商城</h1>
        </div>
        <form name="form1" action="recommend" method="get" class="myform" onsubmit="return ssyz(this)">
            <!-- 搜索不能为空 -->
            <script>
                function ssyz(fom) {
                    if (fom.ss.value == '') {
                        alert('搜索不能为空');
                        fom.ss.select();
                        return false;
                    }
                }
            </script>
            <span class="hot">热门搜索：</span>
            <input type="text" value="seach" name="typeid" style="display: none">
            <input type="text" value="搜索结果" name="titleShow" style="display: none">
            <input name="seachContent" class="ispu" type="text" placeholder="输入关键字" />
            <input name="ok" class="button" type="submit" id="搜索" value="搜索" />
        </form>
    </div>
    <div id="nav">
        <ul>
            <li><a href="{{url('front/index')}}">首页</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>'newgoods','titleShow'=>'新品预售'))}}">新品预售</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>'recomgoods','titleShow'=>'推荐商品'))}}">推荐商品</a></li>
            <li> <a href="{{route('front/recommend',array('typeid'=>1,'titleShow'=>'精选男装'))}}">精选男装</a></li>
            <li> <a href="{{route('front/recommend',array('typeid'=>2,'titleShow'=>'时尚女装'))}}">时尚女装</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>3,'titleShow'=>'美味零食'))}}">美味零食</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>4,'titleShow'=>'便利家电'))}}">便利家电</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>5,'titleShow'=>'潮流酷车'))}}">潮流酷车</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>6,'titleShow'=>'精美家居'))}}">精美家居</a></li>
            <li><a href="{{route('front/recommend',array('typeid'=>7,'titleShow'=>'电脑办公'))}}">电脑办公</a></li>
        </ul>
    </div>

    <div id="content">
        @yield('main')
    </div>
    <div id="footer" style="color: #fff;">
        <p>Copyright © 2020-2021 lpya.cn All Rights Reserved</p>
        <p ><a style="color: #fff;" href="http://beian.miit.gov.cn" target="_blank">备案号：粤ICP备20027673号</a> </p>
    </div>
</body>

</html>