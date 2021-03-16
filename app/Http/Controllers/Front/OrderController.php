<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Indent;
use App\Model\Car;
use Illuminate\Support\Facades\Session;
use App\Encapsulation\Delete;

class OrderController extends Controller
{

	public function order()
	{
		//订单信息填写
		return view("front/order");
	}

	public function addorder(Request $request)
	{
		//添加订单
		$arr = $request->all(); //获取所有信息
		$commodity = ""; //商品名[]
		$quantity = ""; //数量[]
		$total = 0; //总价格
		$username = Session::get("username"); //登陆账号
		$ob = Car::where("username", $username)->get(); //获取该用户下的购物车信息
		for ($i = 0; $i < count($ob); $i++) {
			$commodity = $commodity . $ob[$i]["goodsname"] . "@"; //拼接商品名
			$quantity = $quantity . $ob[$i]["num"] . "@"; //拼接数量
			$total += $ob[$i]["goodsprice"] * $ob[$i]["num"]; //计算总价格
		}
		$arr["userid"] = Session::get("frontid"); //登陆用户id
		$arr["commodity"] = $commodity; //拼接后的商品名
		$arr["quantity"] = $quantity; //拼接后的数量
		$arr["orderdate"] = date("Y-m-d"); //当前系统日期
		$arr["total"] = $total; //总价格
		$ob = Indent::create($arr); //添加信息到数据库
		if ($ob) {
			Car::where("username", $username)->delete(); //成功后清零购物车
			return redirect('front/indent'); //返回
		}
		return redirect()->back();
	}

	public function indent()
	{
		//订单表
		$userid = Session::get("frontid"); //登陆用户id
		$ob = Indent::where("userid", $userid)->get(); //获取登陆用户下的订单
		return view("front/indent", ["ob" => $ob]);
	}

	public function delindent(Request $request)
	{
		//删除单个订单
		$orderid[] = $request->input("orderid");
		$del = new Delete("lg_indent", "orderid", $orderid, "front/indent");
		return $del->delData();
	}
}
