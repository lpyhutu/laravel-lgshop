<link rel="stylesheet" href="{{asset('css/admin/adindex.css') }}">
<!-- <script type="text/javascript" src="{{ asset('js/checkGoods.js') }}"></script> -->

@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"填加商品")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加商品</p>
<form action="addgoods" method="post" onsubmit="return sjyz(this)" enctype="multipart/form-data">
    {{csrf_field()}}
    <table width="670" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#666666">
                <table width="670" cellspacing="1" style="font-size: 13px">
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div>商品名称:</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <input name="goodsname" type="text" id="name" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div>商品号:</div>
                        </td>
                        <td bgcolor="#FFFFFF"><input name="norms" type="number" id="norms" /></td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div>商品类型:</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <select name="typeid" style="margin-left:10px;">
                                @foreach($ob as $obS)
                                <option value="{{$obS->typeid}}">{{$obS->typename}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div>尺码:</div>
                        </td>
                        <td bgcolor="#FFFFFF"><input name="size" type="text" id="size" />如：X@L@XL@XXL</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>分期:</div>
                        </td>
                        <td><input name="installment" type="text" id="installment" />如：不分期@239 X3期@99 X6期</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>出售时间:</div>
                        </td>
                        <td>
                            <select name="year" style="margin-left:10px;">
                                @for($i=2020;$i<=2070;$i++) <option>{{$i}}</option>
                                    @endfor
                            </select>年
                            <select name="month">
                                @for($i=1;$i<=12;$i++) <option>{{$i}}</option>
                                    @endfor
                            </select>月
                            <select name="day">
                                @for($i=1;$i<=31;$i++) <option>{{$i}}</option>
                                    @endfor
                            </select>日
                        </td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>商品价格:</div>
                        </td>
                        <td><input name="goodsprice" type="number" id="goodsprice" />元</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>折扣:</div>
                        </td>
                        <td><input name="vipprice" type="number" id="vipprice" />例如：7</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>商品图片:</div>
                        </td>
                        <td><input name="photo" type="file" id="photo" /></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>商品简介:</div>
                        </td>
                        <td><textarea name="introduction" cols="30" rows="5" style="margin-left:10px;"></textarea></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>是否推荐:</div>
                        </td>
                        <td><input name="recommend" type="radio" value="1" checked="checked" />是<input name="recommend" type="radio" value="0" />否</td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <div>商品预售:</div>
                        </td>
                        <td><input name="newgoods" type="radio" value="1" checked="checked" />是<input name="newgoods" type="radio" value="0" />否</td>
                    </tr>
                    <tr style="text-align:center;">
                        <td colspan="2" bgcolor="#FFFFFF" ;><input type="submit" name="ok" value="提&nbsp;交" style=" margin-right:10px;" />
                            <input type="reset" value="重&nbsp;置" /></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>

@endsection