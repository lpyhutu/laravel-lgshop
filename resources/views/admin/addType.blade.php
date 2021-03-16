<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">

<script>
    function lbyz(fom) {
        if (fom.typename.value == '') {
            alert('请输入类别名称');
            fom.typename.select();
            return false;
        }
        if (fom.typedes.value == '') {
            alert('请输入类别描述');
            fom.typedes.select();
            return false;
        }
    }
</script>
@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"填加类别")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：商品管理－＞填加类别</p>
<form action="toAddType" method="post" onsubmit="return lbyz(this)">
    {{csrf_field()}}
    <table width="670" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#666666">
                <table width="670" cellspacing="1" border="0px">
                    @if(empty($ob))
                    <tr>
                        <td width="103" bgcolor="#FFFFFF">
                            <div>类别名称:</div>
                        </td>
                        <td width="560" bgcolor="#FFFFFF"><input type="text" name="typename" /></td>
                    </tr>
                    <tr>
                        <td width="103" bgcolor="#FFFFFF">
                            <div>类别描述:</div>
                        </td>
                        <td width="560" bgcolor="#FFFFFF"><textarea name="typedes" cols="" rows="" style=" margin-left:10px;"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF"><input type="submit" name="ok" value="提&nbsp;交" style="width:55px; height:30px;" />
                            <input type="reset" value="重&nbsp;置" style="width:55px; height:30px;" />
                            <div></div>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td width="103" bgcolor="#FFFFFF">
                            <div>类别名称:</div>
                        </td>
                        <td width="560" bgcolor="#FFFFFF">
                            <input type="text" name="typename" value="{{$ob[0]->typename}}" />
                            <input type="hidden" name="typeid" value="{{$ob[0]->typeid}}">
                        </td>
                    </tr>
                    <tr>
                        <td width="103" bgcolor="#FFFFFF">
                            <div>类别描述:</div>
                        </td>
                        <td width="560" bgcolor="#FFFFFF"><textarea name="typedes" cols="" rows="" style=" margin-left:10px;">{{$ob[0]->typedes}}</textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF"><input type="submit" name="ok" value="修&nbsp;改" style="width:55px; height:30px;" />
                            <input type="reset" value="重&nbsp;置" style="width:55px; height:30px;" />
                            <div></div>
                        </td>
                    </tr>
                    @endif

                </table>
            </td>
        </tr>
    </table>
</form>

@endsection