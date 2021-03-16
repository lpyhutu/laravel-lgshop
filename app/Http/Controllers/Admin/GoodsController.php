<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Index;
use App\MOdel\Type;
use App\Encapsulation\Paging;
use App\Encapsulation\Delete;
use App\Encapsulation\UploadPictures;

class GoodsController extends Controller
{

	public function type()
	{
		//类别
		$ob = Type::all();
		return $ob;
	}
	public function goods()
	{
		$ob = $this->type();
		return view("admin.goods", ["ob" => $ob]);
	}
	public function addgoods(Request $request)
	{
		//添加|修改商品信息
		$arr = $request->all();
		$file = $request->file("photo");
		// // var_dump($file)
		// return 	$file;
		//调用UploadPictures:class(图片，文件名一，拼接前缀)
		$upload = new UploadPictures($file, "upimages", $arr["norms"]);
		$arr["photo"] = $upload->getFolderName() . "/" . $upload->getFileName();
		$arr["prodate"] = $arr["year"] . "-" . $arr["month"] . "-" . $arr["day"];
		if ($arr["ok"] == "修改") {
			unset($arr["_token"]);
			unset($arr["year"]);
			unset($arr["month"]);
			unset($arr["day"]);
			unset($arr["ok"]);
			$ob = Index::where("goodsid", $arr["goodsid"])->update($arr);
		} else {
			$ob = Index::create($arr);
		}
		if ($ob) {
			return redirect("admin/showGoods");
		}
		return redirect()->back();
	}

	public function showGoods(Request $request)
	{
		//商品展示
		$pageSize = 7;
		$page = $request->input("page");
		$data = new Paging("lg_goods", null, null, null, $page, $pageSize, "admin.showGoods");
		return $data->pagingView();
	}

	public function upGoods(Request $request)
	{
		//拆解年月日
		$goodsid = $request->input("goodsid");
		$ob = Index::where("goodsid", $goodsid)->get();
		$ty = $this->type();
		$prodate = explode("-", $ob[0]["prodate"]);
		return view("admin.upGoods", ["ob" => $ob, "ty" => $ty, "prodate" => $prodate]);
	}


	public function delgoods(Request $request)
	{
		//删除单个请求
		$goodsid[] = $request->input("goodsid");
		$del = new Delete("lg_goods", "goodsid", $goodsid, "admin/showGoods");
		return $del->delData();
	}

	public function delallgoods(Request $request)
	{
		//删除所选请求
		$goodsid = $request->input("goodsid");
		$del = new Delete("lg_goods", "goodsid", $goodsid, "admin/showGoods");
		return $del->delData();
	}
}
