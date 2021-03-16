<!DOCTYPE html>
<link rel="stylesheet" href="{{asset('css/front/gouwuche.css') }}">
<script>
    function resizeImage(obj) {
        if (obj.height > 50) obj.height = 50;
        if (obj.width > 50) obj.width = 50;
    }

    function confrimDelete(id) {
        if (confirm('确定移除商品？')) {
            location.href = "delCollect?id=" + id;
        }
    }

    function clearShoppingCar() {
        if (confirm('确定清空购物？')) {
            location.href = "clearCollect";
        }
    }
</script>
@extends('layouts/frontMOuldTwo')
@section('title',"我的收藏")
@section('main')
<h2 style="text-align: center">我的收藏</h2>
<form action="{{url('front/upnum')}}" method="get">
    <table width="1000" border="1" cellspacing="0">
        <tr style="color:#FFFFFF;">
            <th width="166">商品名称</th>
            <th width="166">商品价格</th>
            <th width="166">操作</th>
        </tr>

        @foreach($ob as $key=> $obS)
        <tr>
            <td style="border-top:1px #254B62 solid;">
                <p><img src="{{asset($obS['photo'])}}" width="44" height="59" onload="resizeImage(this)" />
                    <a href="{{route('front/infor',array('id'=>$obS->sid))}}">{{$obS["goodsname"]}}</a></p>
            </td>
            <td style="border-top:1px #254B62 solid;">{{($obS["goodsprice"])}}
            </td>
            <td style="border-top:1px #254B62 solid; border-right:0px">
                <a href="javascript:void(0);" onclick="confrimDelete(<?php echo $obS['id']; ?>)">取消商品</a></td>
        </tr>
        @endforeach
        @if(count($ob)==0)
        <tr>
            <td colspan="6" style="height: 50px"> 空空如也！</td>
        </tr>
        @endif


    </table>
    <div id="ft">
        <p><span class="p1">
                <a onclick="clearShoppingCar()" class="butt">清空收藏</a>
            </span>

    </div>
</form>
@endsection