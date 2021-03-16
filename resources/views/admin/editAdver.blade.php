<link rel="stylesheet" href="{{asset('css/admin/adindex.css') }}">
<script>
    function deladver(id) {
        if (confirm('是否删除该商品？')) {
            location.href = "deladver?id=" + id;
        }
    }

    function uptype(key) {
        var radioVal = document.getElementsByName(key);
        var changeVal = null;
        for (var i = 0; i < radioVal.length; i++) { //遍历Radio 
            if (radioVal[i].checked) {
                changeVal = radioVal[i].value;
            }
        }
        $.post('adverisShow?=', {
            "_method": "POST",
            "_token": "{{csrf_token()}}",
            "typeid": key,
            "displayType": changeVal
        }, function(data) {
            if (data == 1) {
                alert("修改成功！");
            }
        })
    }
</script>
@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"编辑公告")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：公告管理－＞查看公告</p>
<form name="form1" method="post" action="delalladver" onsubmit='return delall()'>
    {{csrf_field()}}
    <table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="50" bgcolor="#666666">
                <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="1" style="font-size: 13px;">
                    <tr>
                        <td width="50" height="25" bgcolor="#FFFFFF">
                            <div align="center">复选</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">公告主题</div>
                        </td>
                        <td width="448" bgcolor="#FFFFFF">
                            <div align="center">公告内容</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div>发布公告</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">操作</div>
                        </td>
                    </tr>
                    @foreach($ob as $obS)
                    <tr height="60">
                        <td bgcolor="#FFFFFF">
                            <div align="center"><input type="checkbox" class="delall" name="adversid[]" value="{{$obS->id}}">
                            </div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="left">{{$obS->title}}</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="left">{{mb_substr($obS->content,0,80)}}...</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <input name="{{$obS->id}}" type="radio" value="1" {{$obS->displayType==1?"checked='checked'":""}} onclick="uptype({{$obS->id}})" />是
                            <input name="{{$obS->id}}" type="radio" value="0" {{$obS->displayType==1?"":"checked='checked'"}} onclick="uptype({{$obS->id}})" />否
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="center"><a href="{{route('admin/upadver',array('id'=>$obS->id))}}">查看</a>
                                &nbsp;<a onclick="deladver({{$obS->id}})">删除</a></div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>
    <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align:right; padding-right:10px;font-size: 13px;">
                <button style="float:left; margin-right:80px;" class="buttoncss">删除所项</button>
                本站共有 {{$reTotal}} 条记录&nbsp;每页显示 {{$pageSize}} 条&nbsp;第 {{$currentPage}} 页/共 {{$avgTotal}} 页
                <a href="{{route('admin/editAdver',array('page'=>1))}}">第一页</a>
                <a href="{{route('admin/editAdver',array('page'=>$currentPage+1))}}">下一页</a>
                <a href="{{route('admin/editAdver',array('page'=>$avgTotal))}}">尾页</a></td>
        </tr>
    </table>
</form>
@endsection