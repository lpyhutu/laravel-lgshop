<link rel="stylesheet" href="{{ asset('css/front/yuding.css') }}">
@extends('layouts/frontMOuldOne')
@section('title',$titleShow)
@section('main')
<div id="right">

    <script>
        function resizeImage(obj) {
            if (obj.height > 120) obj.height = 120;
            if (obj.width > 120) obj.width = 120;
        }
    </script>
    @foreach($re as $reS)
    <div id="r1" style="margin-top:10px;">
        <div id="rleft">
            <a href="{{route('front/infor',array('id'=>$reS->goodsid))}}"><img src="{{asset($reS->photo)}}" onload="resizeImage(this)" /></a>
        </div>
        <div id="rright">
            <h4>{{$reS->goodsname}}</h4>
            <p>{{$reS->introduction}}</p>
            <p class="rp">
                <span class="xianjia">现价: &yen;
                    {{ $reS->goodsprice*($reS->vipprice/10)}}</span>
                <span class="yuanjia">原价&yen;{{ $reS->goodsprice}}</span>
                折扣：<span class="zheko">{{$reS->vipprice}}折 </span></p>
            <a href="{{route('front/infor',array('id'=>$reS->goodsid))}}"><img src="{{URL::asset('images/buy_btn.png')}}" /></a>
            <a href="addShoppingCar.php?goodsid=35">
                <img src="{{URL::asset('images/collect_btn.png')}}" /></a>

        </div>
    </div>
    @endforeach
    <div id="fenye">
        <p>
            本站共有&nbsp;{{$reTotal}}&nbsp;条记录&nbsp;每页显示&nbsp;4&nbsp;条&nbsp;第&nbsp;{{$currentPage}}&nbsp;页/共&nbsp;{{$avgTotal}}&nbsp;页&nbsp;
            <a href="{{route('front/recommend',array('page'=>1,'typeid'=> $typeid))}}">第一页</a>
            <a href="{{route('front/recommend',array('page'=>$currentPage+1,'typeid'=> $typeid))}}">下一页</a>
            <a href="{{route('front/recommend',array('page'=>$avgTotal,'typeid'=> $typeid))}}">尾页</a></p>
    </div>
</div>
@endsection