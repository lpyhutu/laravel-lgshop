<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">

@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"管理商品")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞查看商品</p>
<form action="delallgoods" method="post" onsubmit="return delall()">
	{{csrf_field()}}
	<span style="text-align:right; padding-right:10px;"></span>
	<table width="670" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td bgcolor="#666666">
				<table width="670" cellspacing="1" border="0px" style="font-size: 13px">
					<tr>
						<td width="33" bgcolor="#FFFFFF">
							<div>复选</div>
						</td>
						<td width="99" bgcolor="#FFFFFF">
							<div>商品名称</div>
						</td>
						<td width="61" bgcolor="#FFFFFF">
							<div>尺码</div>
						</td>
						<td width="115" bgcolor="#FFFFFF">
							<div>分期</div>
						</td>
						<td width="59" bgcolor="#FFFFFF">
							<div>价格</div>
						</td>
						<td width="77" bgcolor="#FFFFFF">
							<div>是否推荐</div>
						</td>
						<td width="77" bgcolor="#FFFFFF">
							<div>新品预售</div>
						</td>
						<td width="80" bgcolor="#FFFFFF">
							<div>操作</div>
						</td>
					</tr>
					@foreach($ob as $obS)
					<tr height="65">
						<td bgcolor="#FFFFFF" style="text-align:center;"><input type="checkbox" class="delall" name="goodsid[]" value="{{$obS->goodsid}}" /></td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->goodsname}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->size}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->installment}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->goodsprice}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->recommend==1?"是":"否"}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">{{$obS->newgoods==1?"是":"否"}}</td>
						<td bgcolor="#FFFFFF" style="text-align:center;">
							<a href="{{route('admin/upgoods',array('goodsid'=>$obS->goodsid))}}">修改</a>
							<a onclick="delgoods({{$obS->goodsid}})">删除</a>
						</td>
					</tr>
					@endforeach
					<script>
						function delgoods(goodsid) {
							if (confirm('是否删除该商品？')) {
								location.href = "delgoods?goodsid=" + goodsid;
							}
						}
					</script>
				</table>
			</td>
		</tr>
		<tr>
			<style>
				* {
					text-decoration: none
				}
			</style>
			<td style="text-align:center; padding-right:10px; padding-top:10px;font-size: 13px;">
				<input type="submit" value="删除所选项" class="buttoncss" style="float:left; margin-right:80px;" />
				本站共有 {{$reTotal}} 条记录&nbsp;每页显示 {{$pageSize}} 条&nbsp;第 {{$currentPage}} 页/共 {{$avgTotal}} 页
				<a href="{{route('admin/showGoods',array('page'=>1))}}">第一页</a>
				<a href="{{route('admin/showGoods',array('page'=>$currentPage+1))}}">下一页</a>
				<a href="{{route('admin/showGoods',array('page'=>$avgTotal))}}">尾页</a>
			</td>
		</tr>
	</table>

	<p style=" text-align:right; margin-right:5px;">
	</p>
</form>
@endsection