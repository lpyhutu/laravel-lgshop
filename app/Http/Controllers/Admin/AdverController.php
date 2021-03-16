<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Adver;
use App\Encapsulation\Paging;
use App\Encapsulation\Delete;

class AdverController extends Controller
{

	public function addAdver(Request $request)
	{
		//公告
		return view("admin.addAdver");
	}

	public function editAdver(Request $request)
	{
		//公告管理
		$pageSize = 7;
		$page = $request->input("page");
		$data = new Paging("lg_advertisement", null, null, null, $page, $pageSize, "admin.editAdver");
		return $data->pagingView();
	}

	public function toadd(Request $request)
	{
		//添加请求
		$arr = $request->all();
		if (empty($arr["id"])) {
			$arr = $request->all();
			$arr["addate"] = date("Y-m-d");
			$ob = Adver::create($arr);
		} else {
			$ob = Adver::where("id", $arr["id"])->update(["title" => $arr["title"], "content" => $arr["content"]]);
		}
		if ($ob) {
			return redirect("admin/editAdver");
		}
		return redirect()->back();
	}

	public function upadver(Request $request)
	{
		//修改
		$id = $request->input("id");
		$ob = Adver::where("id", $id)->get();
		if ($ob) {
			return view("admin.addAdver", ["ob" => $ob]);
		} else {
			return redirect()->back();
		}
	}

	public function deladver(Request $request)
	{
		//删除请求
		$id[] = $request->input("id");
		$del = new Delete("lg_advertisement", "id", $id, "admin/editAdver");
		return $del->delData();
	}

	public function delalladver(Request $request)
	{
		//删除所选
		$id = $request->input("adversid");
		$del = new Delete("lg_advertisement", "id", $id, "admin/editAdver");
		return $del->delData();
	}
	public function adverisShow(Request $request)
	{
		//公告展示前台
		$id = $request->input("typeid");
		$displayData = $request->input("displayType");
		$ob = Adver::where("id", $id)->update(["displayType" => $displayData]);
		return $ob;
	}
}
