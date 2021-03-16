<link rel="stylesheet" href="{{ asset('css/front/changxiao.css') }}">
@extends('layouts/frontMOuldOne')
@section('title',"商品信息")
@section('ban')
<div id="banner"><img src="{{asset('images/banner(2).gif')}}" /></div>
@endsection
@section('main')
<!-- 调用左边导航栏 -->

<script>
    function resizeImage(obj) {
        if (obj.height > 150) obj.height = 150;
        if (obj.width > 150) obj.width = 150;
    }


    $(function() {
        $(".page1").click(function() {
            var that = this;
            $(that).css({
                "background": "#254B62",
                "color": "#ffffff"
            })
            $(that).parent().find("div").not(that).css({
                "background": "#ffffff",
                "color": "#000000"
            })
            var spContent = $(that).text();
            $.post('content?=', { //把商品规格添加到数据库
                "_method": "POST",
                "_token": "{{csrf_token()}}",
                "sid": <?php echo $ob[0]->goodsid; ?>, //商品id
                "sCont": spContent //商品分期
            });


        })
        $(".page").click(function() {
            var that = this;
            $(that).css({
                "background": "#254B62",
                "color": "#ffffff"
            })
            $(that).parent().find(".page").not(that).css({
                "background": "#ffffff",
                "color": "#000000"
            })
            var peContent = $(that).text();
            $.post('content?=', { //把商品分期添加到数据库
                "_method": "POST",
                "_token": "{{csrf_token()}}",
                "sid": <?php echo $ob[0]->goodsid; ?>, //商品id
                "pCont": peContent //商品规格
            });

        })
        $("#getcar").click(function() {
            $.post('getcar?=', {
                "_method": "POST",
                "_token": "{{csrf_token()}}",
                "sid": <?php echo $ob[0]->goodsid; ?> //商品id
            }, function(data) {
                if (data.length == 0) {
                    alert("请选择规格和是否分期！你登陆了吗？");
                } else {
                    if (data[0]["pCont"] == null) {
                        alert("请选择是否分期！");
                    } else if (data[0]["sCont"] == null) {
                        alert("请选择商品规格！");
                    } else {
                        if (data[0]["goodsname"] == null) {
                            location.href = "addcar?sid=" + <?php echo $ob[0]->goodsid; ?>;
                        } else {
                            if (confirm('购物车中存有该商品，是否修改相关信息及添加数量？')) {
                                location.href = "addcar?sid=" + <?php echo $ob[0]->goodsid; ?>;
                            }
                        }

                    }
                }
            });
        })

    })
</script>
<div id="right">
    <h3>{{ $ob[0]->goodsname}}</h3>
    <div id="rleft" style="margin-top:20px;"><img src="{{asset($ob[0]->photo)}}" onload="resizeImage(this)" /></div>
    <div id="rright">
        <p class="p2">现价：<span>&yen;{{ number_format($ob[0]->goodsprice*($ob[0]->vipprice/10),2)}}</span></p>
        <p class="p3">原价：<del>&yen;{{ number_format($ob[0]->goodsprice,2)}}</del>
        </p>
        <p class="p4">规格：
            <div>
                @foreach($sizeData as $key=> $obS)
                <div class='page1'>{{$obS}}</div>
                @endforeach
            </div>
        </p>
        <p class="p5">分期：
            <div class="page">不分期
            </div>
            @for($i=1;$i<=3;$i++)<div class="page">
                {{number_format(($ob[0]->goodsprice * ($ob[0]->vipprice / 10)
                    + ($ob[0]->goodsprice * ($ob[0]->vipprice / 10))
                    * $i * 0.05) / ($i * 3), 2) . ' X' . ($i * 3) . '期'}}
        </p>
    </div>

    @endfor

    <p>
        生产时间：{{ $ob[0]->prodate}}</p>
    <button id="getcar" value="" style=" background:url({{asset('images/add_shoppingcart.jpg')}}) no-repeat; width:187px; height:38px; border:0px;"></button>

</div>
<div id="rfooter">
    <ul>
        <li><a href="#">内容简介</a></li>
    </ul>
    <p>{{ $ob[0]->introduction}}</p>
</div>
@endsection