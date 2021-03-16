<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Type;
use App\Encapsulation\Paging;
use App\Encapsulation\Delete;

class TypeController extends Controller
{

	public function addtype()
	{
		return view("admin.addType");
	}
	public function toAddType(Request $request)
	{
		//添加|修改请求
		$arr = $request->all();
		if (empty($arr["typeid"])) {
			$ob = Type::create($arr);
		} else {
			$ob = Type::where("typeid", $arr["typeid"])->update(["typename" => $arr["typename"], "typedes" => $arr["typedes"]]);
		}
		if ($ob) {
			return redirect("admin/showType");
		} else {
			return redirect()->back();
		}
	}

	public function showType(Request $request)
	{
		//类别展示
		$pageSize = 10;
		$page = $request->input("page");
		$data = new Paging("lg_type", null, null, null, $page, $pageSize, "admin.showType");
		return $data->pagingView();
	}

	public function deltype(Request $request)
	{
		//删除单个
		$typeid[] = $request->input("typeid");
		$del = new Delete("lg_type", "typeid", $typeid, "admin/showType");
		return $del->delData();
	}

	public function delalltype(Request $request)
	{
		//删除所选
		$typeid = $request->input("typeid");
		$del = new Delete("lg_type", "typeid", $typeid, "admin/showType");
		return $del->delData();
	}

	public function uptype(Request $request)
	{
		//返回修改信息
		$typeid = $request->input("typeid");
		$ob = Type::where("typeid", $typeid)->get();
		if ($ob) {
			return view("admin.addtype", ["ob" => $ob]);
		} else {
			return redirect()->back();
		}
	}

	public function displayType(Request $request)
	{
		$typeid = $request->input("typeid");
		$displayData = $request->input("displayType");
		$ob = Type::where("typeid", $typeid)->update(["displayType" => $displayData]);
		return $ob;
	}
}
