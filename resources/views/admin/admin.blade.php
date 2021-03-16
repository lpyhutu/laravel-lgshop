<link rel="stylesheet" href="{{ URL::asset('css/admin/adindex.css') }}">

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
<script>
    function lbyz(fom) {
        if (fom.newuser.value == '') {
            alert('请输入用户名');
            fom.newuser.select();
            return false;
        }
        if (fom.newpassword.value == '') {
            alert('请输入密码');
            fom.newpassword.select();
            return false;
        }
        if (fom.repassword.value != fom.newpassword.value) {
            alert('密码不一致');
            return false;
        }
    }
</script>
@extends('layouts/adminMould'){{--调用模板--}}
@section('title',"管理员管理")
@section('main')
<p style="background:#254B62; padding-left:10px; color:#FFF;">您当前的位置：用户管理－＞修改管理员</p>
<form action="changeAdmin" method="post" onsubmit="return lbyz(this)">
    {{csrf_field()}}
    <table width="670" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#666666">
                <table width="670" cellspacing="1" border="0px">
                    <tr>
                        <td width="62" bgcolor="#FFFFFF" colspan="3">
                            <div>当前您的用户名:</div>
                        </td>
                        <td width="163" bgcolor="#FFFFFF" colspan="3">
                            <div>{{session()->get('name')}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td width="62" bgcolor="#FFFFFF">
                            <div>新用户名:</div>
                        </td>
                        <td width="163" bgcolor="#FFFFFF">
                            <input type="text" name="newuser" style="width:140px;" /></td>
                        <td width="74" bgcolor="#FFFFFF">
                            <div>新用户密码:</div>
                        </td>
                        <td width="140" bgcolor="#FFFFFF"><input type="text" name="newpassword" style="width:140px;" /></td>
                        <td width="70" bgcolor="#FFFFFF">
                            <div>确认密码:</div>
                        </td>
                        <td width="142" bgcolor="#FFFFFF"><input type="text" name="repassword" style=" width:140px;" /></td>

                    </tr>
                    <tr>
                        <td colspan="4" bgcolor="#FFFFFF"><input type="submit" name="ok" value="提交修改" /> <input type="reset" value="重&nbsp;置" />
                            <div></div>
                        </td>
                        <td colspan="2" bgcolor="#FFFFFF"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>

@endsection