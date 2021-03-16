<link rel="stylesheet" href="{{asset('css/front/regsiter.css') }}">
<script type="text/javascript" src="{{ asset('js/checkReg.js') }}"></script>
@extends('layouts/frontMOuldTwo')
@section('title',"注册")
@section('main')
<form action="toregister" method="post" style="background:url({{asset('images/bg.gif')}}) no-repeat;" id="register" name="user_register_form" onsubmit="return checkAll()">
    {{csrf_field()}}
    <h1>用户注册</h1>
    <ul>
        <li><a href="#">1.填写注册信息</a></li>
        <li><a href="#">2.注册成功</a></li>
        <li style="margin-left:480px; font-size:12px;">以下<font style=" color:#F00;">*</font>为必填项</li>
    </ul>
    <table width="571" border="0" id="table2" style="font-size: 14px">
        <tr>
            <td width="100" height="49">
                <font color="#FF0000">*</font>用 户 名：
            </td>
            <td width="166"><input name="username" id="in_username" type="text" onblur="checkUser()" /></td>
            <td style=" text-align:left; padding-left:5px;color:#0000FF" id="username">
                用户名由英文字母和数字组成的4-16位字符，以字母开头!
            </td>

        </tr>
        <tr>
            <td height="49">
                <font color="#FF0000">*</font>登录密码：
            </td>
            <td><input name="password" type="password" id="pwd" onblur="checkPwd()" /></td>
            <td style=" text-align:left; padding-left:5px;color:#0000FF" id="passwords">
                6-16位英文字母或者数字建议采用易记的英文数字组合!
            </td>
        </tr>
        <tr>
            <td height="61">
                <font color="#FF0000">*</font>确认密码：
            </td>
            <td><input name="repasswords" type="password" id="repwd" onblur="checkRepwd()" /></td>
            <td style=" text-align:left; padding-left:5px;color:#0000FF" id="repasswords">
                必需与设置密码一致!
            </td>
        </tr>

        <tr>
            <td height="49">联系电话：</td>
            <td><input name="telephone" type="text" id="mobile" onblur="checkMobile()" /></td>
            <td style=" text-align:left; padding-left:5px;color:#0000FF" id="telephone">
                请输入手机号！
            </td>
        </tr>
        <tr>
            <td height="49">
                <font color="#FF0000">*</font>邮箱地址：
            </td>
            <td><input name="email" type="text" id="email" onblur="checkEmail()" /></td>
            <td style=" text-align:left; padding-left:5px;color:#0000FF" id="email_prompt">
                请输入邮箱号！
            </td>
        </tr>
        <tr>
            <td height="49">用户地址:</td>
            <td><input type="text" name="address" /></td>
            <td style=" text-align:left; padding-left:5px;" id="address">
                <font color="#0000FF" ;>填写城市名、区、街道、门牌号。</font>
            </td>
        </tr>
        <tr>
            <td height="49">
                <font color="#FF0000">*</font>验 证 码：
            </td>
            <td><input name="checkCode" type="text" /></td>
            <td style="text-align:left;">
                <img src="{{ url('front/code') }}" onclick="this.src='{{ url('front/code')}}?'+Math.random();" title="点击刷新">
            </td>
        </tr>
        <tr>
            <td height="55" width="80"></td>
            <td>
                <input type="submit" name="ok" id="ok" value="" style="background:url({{asset('images/bottom.gif')}}); width:114px; height:51px; border:0px;" />
            </td>
            <td></td>
        </tr>
    </table>
</form>
@endsection