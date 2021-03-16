<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Model\Index;
use App\Model\Car;
use App\Encapsulation\Delete;


class CarController extends Controller
{

	public function infor(Request $request)
	{
		//单个商品展示
		$id = $request->input('id');
		$ob = Index::where("goodsid", $id)->get();
		if ($ob) {
			$sizeData = explode("@", $ob[0]->size); //拆分
			$installmentData = explode("@", $ob[0]->installment);
			return view(
				"front/infor",
				[
					"ob" => $ob,
					"sizeData" => $sizeData,
					"installmentData" => $installmentData
				]
			);
		}
	}

	public function car($sid, $username)
	{
		//查询购物车
		$ob = Car::where("sid", $sid)->where("username", $username)->get();
		return $ob;
	}

	public function content(Request $request)
	{
		//添加分期及商品规格
		$sCont = $request->input("sCont");
		$pCont = $request->input("pCont");
		$sid = $request->input("sid");
		$username = Session::get("username");
		$arr = ["sid" => $sid, "username" => $username, "pCont" => $pCont, "sCont" => $sCont];
		$ob = $this->car($sid, $username);
		if (count($ob) != 0) {
			if ($sCont == "") {
				$ob = Car::where("sid", $sid)->where("username", $username)->update(["pCont" => $pCont]);
			} else {
				$ob = Car::where("sid", $sid)->where("username", $username)->update(["sCont" => $sCont]);
			}
		} else {
			$ob = Car::create($arr);
		}
	}


	public function getCar(Request $request)
	{
		//查询购物车
		$sid = $request->input("sid");
		$username = Session::get("username");
		$ob = $this->car($sid, $username);
		return $ob;
	}

	public function addCar(Request $request)
	{
		//添加购物车
		$sid = $request->input("sid");
		$username = Session::get("username");
		$ob = $this->car($sid, $username);
		if ($ob) {
			if ($ob[0]->goodsname == null) { //如果商品不存在则添加
				$ob = Index::where("goodsid", $sid)->get(); //查询
				$arr = ["goodsname" => $ob[0]->goodsname, "goodsprice" => $ob[0]->goodsprice,  "photo" => $ob[0]->photo, "num" => 1];
				$ob = Car::where("sid", $sid)->where("username", $username)->update($arr); //更新
			} else { //商品存在则数量加1
				$ob = Car::where("sid", $sid)->where("username", $username)->update(["num" => $ob[0]->num + 1]);
			}
		}
		Car::where("goodsname", null)->delete(); //删除只添加规格没其它数据的商品
		return redirect('front/showCar'); //返回
	}

	public function showCar()
	{
		//购物车展示
		$username = Session::get("username");
		$ob = Car::where("username", $username)->get(); //查询
		if ($ob) {
			Car::where("goodsname", null)->delete(); //删除只添加规格没其它数据的商品
		}
		return view("front/showCar", ["ob" => $ob]);
	}

	public function upnum(Request $request)
	{
		//修改商品数量
		$username = Session::get("username"); //登陆账号
		$oj = Car::where("username", $username)->get(); //查询
		if (count($oj) != 0) {
			$cid = $request->input("cid"); //获取cid[]
			$num = $request->input("num"); //获取num[]
			for ($i = 0; $i < count($cid); $i++) { //循环更新商品数量
				if ($num[$i] <= 0) {
					$num[$i] = 1;
				}
				$ob = Car::where("cid", $cid[$i])->update(["num" => $num[$i]]);
			}
			if ($ob) {
				return	$this->showCar(); //调用showCar()
			}
			return redirect()->back();
		}
		return	$this->showCar();
	}

	public function delgoods(Request $request)
	{
		//删除单个请求
		$cid[] = $request->input("cid");
		$del = new Delete("lg_car", "cid", $cid, "front/showCar");
		return $del->delData();
	}

	public function clearCar()
	{
		//清空购物车
		$username[] = Session::get("username");
		$del = new Delete("lg_car", "username", $username, "front/showCar");
		return $del->delData();
	}
}
