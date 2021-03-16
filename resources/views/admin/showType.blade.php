<link rel="stylesheet" href="{{asset('css/admin/adindex.css') }}">
<script type="text/javascript" src="{{  asset('js/jquery-1.11.0.js')  }}"></script>
<script>
    function deltype(typeid) {
        if (confirm('是否删除该商品？')) {
            location.href = "deltype?typeid=" + typeid;
        }
    }
    $(function() {
        $("#test").click(function() {
            var val = $('input:radio[name="list"]:checked').val();
            if (val == null) {
                alert("什么也没选中!");
                return false;
            } else {
                alert(val);
            }
        });
    });

    function uptype(key) {
        var radioVal = document.getElementsByName(key);
        var changeVal = null;
        for (var i = 0; i < radioVal.length; i++) { //遍历Radio 
            if (radioVal[i].checked) {
                changeVal = radioVal[i].value;
            }
        }
        $.post('typeisShow?=', {
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
@section('title',"编辑类别")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：类别管理－＞查看类别</p>
<form action="delalltype" method="post" onsubmit="return delall()">
    {{csrf_field()}}
    <table width="670" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#666666">
                <table width="670" cellspacing="1" border="0px" style="font-size: 13px;">
                    <tr>
                        <td width="60" bgcolor="#FFFFFF">
                            <div>复选</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div>类别名称</div>
                        </td>
                        <td width="232" bgcolor="#FFFFFF">
                            <div>类别描述</div>
                        </td>
                        <td width="90" bgcolor="#FFFFFF">
                            <div>显示前台</div>
                        </td>
                        <td width="100" bgcolor="#FFFFFF">
                            <div>操作</div>
                        </td>
                    </tr>
                    @foreach($ob as $key=> $obS)
                    <tr height="45">
                        <td bgcolor="#FFFFFF">
                            <div><input type="checkbox" class="delall" name="typeid[]" value="{{$obS->typeid}}" /></div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div>{{$obS->typename}}</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <div>{{$obS->typedes}}</div>
                        </td>
                        <td bgcolor="#FFFFFF">
                            <input name="{{$obS->typeid}}" type="radio" value="1" {{$obS->displayType==1?"checked='checked'":""}} onclick="uptype({{$obS->typeid}})" />是
                            <input name="{{$obS->typeid}}" type="radio" value="0" {{$obS->displayType==1?"":"checked='checked'"}} onclick="uptype({{$obS->typeid}})" />否
                        </td>
                        <td width="122" bgcolor="#FFFFFF">
                            <div><a href="{{route('admin/uptype',array('typeid'=>$obS->typeid))}}">修改</a>&nbsp;<a onclick="deltype({{$obS->typeid}})">删除</a></div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        <td style="text-align:right; padding-right:10px;font-size:13px;height:25px;line-height: 25px">
            <input type="submit" value="删除所选项" class="buttoncss" style="float:left; margin-right:80px;" />
            本站共有 {{$reTotal}} 条记录&nbsp;每页显示 {{$pageSize}} 条&nbsp;第 {{$currentPage}} 页/共 {{$avgTotal}} 页
            <a href="{{route('admin/showType',array('page'=>1))}}">第一页</a>
            <a href="{{route('admin/showType',array('page'=>$currentPage+1))}}">下一页</a>
            <a href="{{route('admin/showType',array('page'=>$avgTotal))}}">尾页</a>
        </td>
    </table>

</form>
@endsection