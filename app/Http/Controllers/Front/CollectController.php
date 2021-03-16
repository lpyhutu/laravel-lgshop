<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Model\Collect;
use Illuminate\Http\Request;
use App\Model\Index;

class CollectController extends Controller
{
	public function collect()
	{
		//收藏
		$username = Session::get("username");
		$ob = Collect::where("username", $username)->get();
		return view("front.collection", ["ob" => $ob]);
	}
	public function addCollect(Request $request)
	{
		//添加收藏
		$id = $request->input("id");
		$arr = Index::where("goodsid", $id)->get();
		$carr = Collect::where("sid", $id)->get();
		if (count($carr) === 0) { //如果收藏列表不存在则添加|减少
			$ob = Collect::create(
				[
					"sid" => $id,
					"goodsname" => $arr[0]["goodsname"],
					"goodsprice" => $arr[0]["goodsprice"],
					"username" => Session::get("username"),
					"photo" => $arr[0]["photo"]
				]

			);
		}
		return redirect("front/collect");
	}
	public function delCollect(Request $request)
	{
		//删除单个收藏 
		$id = $request->input("id");
		$ob = Collect::where("id", $id)->delete();
		if ($ob) {
			return redirect("front/collect");
		}
		return redirect()->back();
	}
	public function	clearCollect()
	{
		//清空收藏列表
		$ob = Collect::where("username", Session::get("username"))->delete();
		if ($ob) {
			return redirect("front/collect");
		}
		return redirect()->back();
	}
}
