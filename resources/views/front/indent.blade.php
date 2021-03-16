<link rel="stylesheet" href="{{ URL::asset('css/front/xianshidingdan.css') }}">
@extends('layouts/frontMOuldTwo')
@section('title',"商品信息")
@section('main')
<h1>我订单信息</h1>
<form action="" method="post">
    <table width="1000" border="1" bordercolor='#006600' bgcolor="#FFFFFF" cellspacing="0">
        <tr>
            <td width="8" style="border:0px;">
                <table width="1000" border="1" bordercolor='#006600' bgcolor="#FFFFFF" cellspacing="0">
                    <tr>
                        <th width="123">订单号</th>
                        <th width="117">收货人</th>
                        <th width="121">付款方式</th>
                        <th width="128">订单总金额</th>
                        <th width="121">订单状态</th>
                        <th width="123">下单时间</th>
                        <th width="225">操作</th>
                    </tr>
                    @foreach($ob as $obS)
                    <tr>
                        <td>包裹{{$obS->orderid}} </td>
                        <td>{{$obS->consignee}}</td>
                        <td><span title="货到付款">在线支付</span></td>
                        <td>&yen;{{$obS->total}}</td>
                        <td>{{$obS->state}}</td>
                        <td>{{$obS->orderdate}}</td>
                        <td><a onclick="clearIndent(<?php echo $obS->orderid; ?>)">取消订单</a></td>
                    </tr>
                    @endforeach
                    @if(count($ob)==0)
                    <tr>
                        <td colspan="7"> 空空如也！</td>
                    </tr>
                    @endif
                    <script>
                        function clearIndent(orderid) {
                            if (confirm('确定取消订单？')) {
                                location.href = "delindent?orderid=" + orderid;;
                            }
                        }
                    </script>
                </table>
            </td>
        </tr>
    </table>
</form>
@endsection