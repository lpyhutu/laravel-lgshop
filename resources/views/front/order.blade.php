<link rel="stylesheet" href="{{ URL::asset('css/front/dingdan.css') }}">

<script>
    function chkinput(form) {
        if (form.consignee.value == "") {
            alert("请输入收货人姓名!");
            form.consignee.select();
            return (false);
        }
        if (form.address.value == "") {
            alert("请输入收货人地址!");
            form.address.select();
            return (false);
        }
        if (form.postcode.value == "") {
            alert("请输入收货人邮编!");
            form.postcode.select();
            return (false);
        }
        if (form.telephone.value == "") {
            alert("请输入收货人联系电话!");
            form.telephone.select();
            return (false);
        }
        if (form.email.value == "") {
            alert("请输入收货人E-mail地址!");
            form.email.select();
            return (false);

        }
        if (form.email.value.indexOf("@") < 0) {
            alert("收货人E-mail地址格式输入错误!");
            form.email.select();
            return (false);
        }

        if (form.buyer.value == "") {
            alert("请输入下单人姓名!");
            form.buyer.select();
            return (false);
        }
        return (true);
    }
</script>
@extends('layouts/frontMOuldTwo')
@section('title',"购物车")
@section('main')
<img src="{{asset('images/order.jpg')}}" />
<div id="dingdan">
    <h3 style="color:#FFF; font-size:15px;">请添写收货人信息</h3>
    <form action="{{url('front/addorder')}}" method="post" name="form1" onsubmit="return chkinput(this)">
        {{csrf_field()}}
        <table style="font-size: 14px" width="261" border="0" bordercolor="#FF9900" id="tianxie" cellspacing="0" cellpadding="0">
            <tr>
                <td width="88" height="35">
                    <p>收货人姓名： </p>
                </td>
                <td width="166"><input name="consignee" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
            </tr>
            <tr>
                <td width="88" height="35">
                    <p>收货人性别： </p>
                </td>
                <td width="166"><input type="radio" name="sex" value="女" checked="checked" />女<input type="radio" name="sex" value="男" />男</td>
            </tr>
            <tr>
                <td height="34">收货人地址：</td>
                <td><input name="address" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"> </td>
            </tr>
            <tr>
                <td height="34">
                    <p>邮 编：</p>
                </td>
                <td><input name="postcode" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
            </tr>
            <tr>
                <td height="34">
                    <p>联系电话：</p>
                </td>
                <td><input name="telephone" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
            </tr>
            <tr>
                <td height="34">
                    <p> 邮箱地址：</p>
                </td>
                <td><input name="email" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
            </tr>
            <tr>
                <td height="34">
                    <p> 下单人姓名：</p>
                </td>
                <td><input name="buyer" type="text" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
            </tr>
            <tr>
                <td height="34">
                    <p>送货方式:</p>
                </td>
                <td><select name="express">
                        <option selected="selected">普通快递</option>
                        <option>平邮</option>
                        <option>特快专递</option>
                        <option>圆通</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" class="butt" value="提交订单">
                        <input type="hidden" value="未处理" name="state" />
                        <input type="reset" class="butt" value="重置订单" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection