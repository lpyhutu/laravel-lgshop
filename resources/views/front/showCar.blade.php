<!DOCTYPE html>
<link rel="stylesheet" href="{{ URL::asset('css/front/gouwuche.css') }}">
<script>
    function resizeImage(obj) {
        if (obj.height > 50) obj.height = 50;
        if (obj.width > 50) obj.width = 50;
    }

    function confrimDelete(cid) {
        if (confirm('确定把该商品从购物车中移除？')) {
            location.href = "delgoods?cid=" + cid;
        }
    }

    function clearShoppingCar() {
        if (confirm('确定清空购物？')) {
            location.href = "clearCar";
        }
    }
</script>
@extends('layouts/frontMOuldTwo')
@section('title',"购物车")
@section('main')
<img src="{{asset('images/shopping_cart.jpg')}}" />
<form action="{{url('front/upnum')}}" method="get">
    <table width="1000" border="1" cellspacing="0">
        <tr style="color:#FFFFFF;">
            <th width="166">商品名称</th>
            <th width="166">商品价格</th>
            <th width="166">商品规格</th>
            <th width="166">商品分期</th>
            <th width="166">商品数量</th>
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
            <td style="border-top:1px #254B62 solid;">{{($obS["sCont"])}}
            </td>
            <td style="border-top:1px #254B62 solid;">{{($obS["pCont"])}}
            </td>
            <td style="border-top:1px #254B62 solid;">
                <input type="text" name="cid[]" value="{{$obS['cid']}}" style="display: none">
                <input type="text" name="num[]" id="textfield" value="{{$obS['num']}}" /></td>
            <td style="border-top:1px #254B62 solid; border-right:0px"><a href="javascript:void(0);" onclick="confrimDelete(<?php echo $obS['cid']; ?>)">取消商品</a></td>
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
                <input type="submit" value="修改商品数量" class="butt" />
                &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="p1">
                <a onclick="clearShoppingCar()" class="butt">清空购物车</a>
            </span>
            <span class="p2"> 商品金额总计：
                <?php
                if (isset($ob)) {
                    $sum = 0;
                    foreach ($ob as $obSS) {
                        $sum += (int) $obSS["goodsprice"] * $obSS["num"];
                    }
                    echo number_format($sum);
                } else {
                    echo "0.00";
                }
                ?>
            </span></p>
    </div>
    <a href="{{url('front/order')}}">
        <p class="i1" name="ok" value="" style="background:url({{asset('images/account_btn.jpg')}}) no-repeat; border:0px; width:145px; height:50px;cursor:pointer;"></p>
    </a>
    <a href="{{url('front/index')}}"> <img src="{{asset('images/buy_continue.jpg')}}" class="i1" /> </a>
</form>
@endsection