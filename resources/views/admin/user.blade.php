<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">

@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"会员管理")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：会员管理－＞查看会员</p>

<form action="delalluser" method="post" onsubmit="return delall()">
    {{csrf_field()}}
    <table width="670" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:right;">
        <tr>
            <td height="50" bgcolor="#666666">
                <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="1" style="font-size: 13px">
                    <tr>
                        <td width="50" height="25" bgcolor="#FFFFFF">
                            <div align="center">复选</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">用户姓名</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">用户密码</div>
                        </td>
                        <td width="150" bgcolor="#FFFFFF">
                            <div align="center">用户电话</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">用户地址</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div align="center">用户邮箱</div>
                        </td>
                        <td width="130" bgcolor="#FFFFFF">
                            <div align="center">注册时间</div>
                        </td>
                        <td width="80" bgcolor="#FFFFFF">
                            <div align="center">操作</div>
                        </td>
                    </tr>
                    @foreach($ob as $obS)
                    <tr  height="40">
                        <td bgcolor="#FFFFFF">
                            <div align="center"><input type="checkbox" class="delall" name="userid[]" value="{{$obS->userid}}"></div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div align="left">{{$obS->username}}</div>
                        </td>
                        <td   bgcolor="#FFFFFF">
                            <div align="left">{{$obS->password}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="left">{{$obS->telephone}}</div>
                        </td>
                        <td   bgcolor="#FFFFFF">
                            <div align="left">{{$obS->address}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="left">{{$obS-> email}}</div>
                        </td>
                        <td  bgcolor="#FFFFFF">
                            <div align="left">{{$obS->regdate}}</div>
                        </td>
                        <script>
                            function deluser(userid) {
                                if (confirm("是否删除该用户")) {
                                    location.href = "deluser?userid=" + userid;
                                }
                            }
                        </script>
                        <td  bgcolor="#FFFFFF">
                            <div align="center"><a onclick="deluser({{$obS->userid}})">删除</a></div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>
    </table>
    <table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td style="text-align:right; padding-right:10px;font-size:13px">
                <input type="submit" value="删除所选用户" class="buttoncss" style="float:left; margin-right:80px;" />
                本站共有 {{$reTotal}} 条记录&nbsp;每页显示 {{$pageSize}} 条&nbsp;第 {{$currentPage}} 页/共 {{$avgTotal}} 页
                <a href="{{route('admin/user',array('page'=>1))}}">第一页</a>
                <a href="{{route('admin/user',array('page'=>$currentPage+1))}}">下一页</a>
                <a href="{{route('admin/user',array('page'=>$avgTotal))}}">尾页</a>
            </td>
        </tr>
    </table>
</form>
@endsection