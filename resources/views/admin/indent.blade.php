<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">
@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"管理订单")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：订单管理－＞查看订单</p>
<form name="form1" method="post" action="">
    <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="40" bgcolor="#666666">
                <table width="670" height="44" border="0" align="center" cellpadding="0" cellspacing="1" style="font-size: 13px">
                    <tr>
                        <td width="121" height="20" bgcolor="#FFFFFF">
                            <div align="center">订单号</div>
                        </td>
                        <td width="59" bgcolor="#FFFFFF">
                            <div align="center">下单人</div>
                        </td>
                        <td width="60" bgcolor="#FFFFFF">
                            <div align="center">订货人</div>
                        </td>
                        <td width="70" bgcolor="#FFFFFF">
                            <div align="center">金额总计</div>
                        </td>
                        <td width="87" bgcolor="#FFFFFF">
                            <div align="center">收货方式</div>
                        </td>
                        <td width="141" bgcolor="#FFFFFF">
                            <div align="center">订单状态</div>
                        </td>
                        <td width="115" bgcolor="#FFFFFF">
                            <div align="center">操作</div>
                        </td>
                    </tr>
                    @foreach($ob as $obS)
                    <tr height="45">
                        <td  bgcolor="#FFFFFF">
                            <div align="center">{{$obS->orderid}}</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="center">{{$obS->consignee}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="center">{{$obS->buyer}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="center">{{$obS->total}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="center">{{$obS->express}}</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="center">{{$obS->state}}</div>
                        </td>
                        <script>
                            function delindent(orderid) {
                                if (confirm('是否删除该商品？')) {
                                    location.href = "delindent?orderid=" + orderid;
                                }
                            }
                        </script>
                        <td  bgcolor="#FFFFFF">
                            <div align="center"><a onclick="delindent({{$obS->orderid}})">删除</a></div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>
    <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr style="text-align:right; margin-right:5px;">
            <td style="text-align:right; padding-right:10px;font-size:13px">
                本站共有 {{$reTotal}} 条记录&nbsp;每页显示 {{$pageSize}} 条&nbsp;第 {{$currentPage}} 页/共 {{$avgTotal}} 页
                <a href="{{route('admin/indent',array('page'=>1))}}">第一页</a>
                <a href="{{route('admin/indent',array('page'=>$currentPage+1))}}">下一页</a>
                <a href="{{route('admin/indent',array('page'=>$avgTotal))}}">尾页</a>
        </tr>
    </table>
</form>
@endsection