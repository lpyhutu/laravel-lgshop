<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">
@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"添加公告")
@section('main')
<script>
    function chkinput(form) {
        if (form.title.value == "") {
            alert("请输入公告主题!");
            form.title.select();
            return (false);
        }
        if (form.content.value == "") {
            alert("请输入公告内容!");
            form.content.select();
            return (false);
        }
        return (true);
    }
</script>
<style type="text/css">
    #footer {
        clear: both;
        width: 900px;
        text-align: center;
        margin-top: 20px;
        height: 40px;
        padding-top: 5px;
        background-color: #254B62;
    }

    #footer p {
        color: #FFFFFF;
    }
</style>

<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：公告管理－＞添加公告</p>
<table width="670" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="175" bgcolor="#666666">
            <table width="670" height="175" border="0" align="center" cellpadding="0" cellspacing="1">
                <form name="form1" action="toadd" method="post" onSubmit="return chkinput(this)">
                    {{csrf_field()}}
                    @if(empty($ob))
                    <tr>
                        <td width="80" height="25" bgcolor="#FFFFFF">
                            <div align="center">公告主题：</div>
                        </td>
                        <td width="667" bgcolor="#FFFFFF">
                            <div style="text-align:left; "><input type="text" name="title" size="50" class="inputcss"></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="125" bgcolor="#FFFFFF">
                            <div align="center">公告内容：</div>
                        </td>
                        <td height="125" bgcolor="#FFFFFF">
                            <div style="text-align:left; ">
                                <textarea name="content" rows="8" cols="70" style="margin-left:10px;"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="25" colspan="2" bgcolor="#FFFFFF">
                            <div align="center"><input type="submit" name="submit" value="添加" class="buttoncss" style="width:55px; height:30px;">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss " style="width:55px; height:30px;"></div>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <td width="80" height="25" bgcolor="#FFFFFF">
                            <div align="center">公告主题：</div>
                        </td>
                        <td width="667" bgcolor="#FFFFFF">
                            <div style="text-align:left; "><input type="text" value="{{$ob[0]->title}}" name="title" size="50" class="inputcss"></div>
                        </td>
                    </tr>
                    <tr>
                        <td height="125" bgcolor="#FFFFFF">
                            <div align="center">公告内容：</div>
                        </td>
                        <td height="125" bgcolor="#FFFFFF">
                            <div style="text-align:left; ">
                                <textarea name="content" rows="8" cols="70" style="margin-left:10px;">{{$ob[0]->content}}</textarea>
                            </div>
                            <input type="hidden" name="id" value="{{$ob[0]->id}}">
                        </td>
                    </tr>
                    <tr>
                        <td height="25" colspan="2" bgcolor="#FFFFFF">
                            <div align="center"><input type="submit" name="submit" value="修改" class="buttoncss" style="width:55px; height:30px;">&nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss " style="width:55px; height:30px;"></div>
                        </td>
                    </tr>
                    @endif
                </form>
            </table>
        </td>
    </tr>
</table>
@endsection