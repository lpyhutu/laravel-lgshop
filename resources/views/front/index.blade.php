<link rel="stylesheet" type="text/css" href="{{ asset('css/front/index.css') }}">
@extends('layouts/frontMOuldOne')
@section('title',"乐购商城首页")
@section('main')
<!-- 调用左边导航栏 -->
<div id="con">
    <!--首页图片特效代码开始-->
    <div id="banner">
        <script type="text/javascript" src="{{asset('js/pptBox.js') }}"></script>
        <script>
            var box = new PPTBox();
            box.width = 510; //宽度
            box.height = 314; //高度
            box.autoplayer = 3; //自动播放间隔时间
            //box.add({"url":"图片地址","title":"悬浮标题","href":"链接地址"})
            box.add({
                "url": "{{asset('images/main1.jpg')}}",
                "href": "",
                "title": "悬浮提示标题1"
            }) //url为换图片 href为点击后链接的地址
            box.add({
                "url": "{{asset('images/main2.jpg')}}",
                "href": "",
                "title": "悬浮提示标题2"
            }) //url为换图片 href为点击后链接的地址
            box.add({
                "url": "{{asset('images/main3.jpg')}}",
                "href": "",
                "title": "悬浮提示标题3"
            }) //url为换图片 href为点击后链接的地址
            box.add({
                "url": "{{asset('images/main4.jpg')}}",
                "href": "",
                "title": "悬浮提示标题4"
            }) //url为换图片 href为点击后链接的地址
            box.show();
        </script>
    </div>
    <!--首页图片特效代码结束-->
    <div id="right">
        <h3><img src="{{asset('images/right.gif')}}" /><span>新品预售</span></h3>
        @foreach($oj as $key=> $ojS)
        <p id="rp"> <a href="{{route('front/infor',array('id'=>$ojS->goodsid))}}">
                <img src="{{asset('images/'.($key+1).'.gif')}}" />{{$ojS->goodsname}}</a></p>
        @endforeach
    </div>
    <div id="confooter">
        <h3 style="background: #f85963"><span class="hl">
                <img src="{{ asset('images/right5.jpg') }}" />商品推荐</span>
            <a href="{{route('front/recommend',array('typeid'=>'recomgoods','titleShow'=>'推荐商品'))}}">
                <span class="hr">更多商品推荐>></span>
            </a>
        </h3>
        <script>
            function resizeImage(obj) {
                if (obj.height > 55) obj.height = 55;
                if (obj.width > 60) obj.width = 60;
            }
        </script>
        <ul>
            @foreach($ob as $obS)
            <li>
                <a href="{{route('front/infor',array('id'=>$obS->goodsid))}}">
                    <img src="{{asset($obS->photo)}}" onload="resizeImage(this)" />
                    <h5><span>名称：</span>
                        {{$obS->goodsname}}
                    </h5>
                    <p>{{mb_substr($obS->introduction,0,10)}}...
                    </p>
                </a>
                <p>价格：<span>{{$obS->goodsprice}}</span></p>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection