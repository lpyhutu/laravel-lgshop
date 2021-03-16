<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Encapsulation\Paging;
use App\Encapsulation\Delete;

class OrderController extends Controller
{


	public function indent(Request $request)
	{
		//订单展示
		$pageSize = 10;
		$page = $request->input("page");
		$data = new Paging("lg_indent", null, null, null, $page, $pageSize, "admin.indent");
		return $data->pagingView();
	}

	public function delindent(Request $request)
	{
		//删除单个请求
		$orderid[] = $request->input("orderid");
		$del = new Delete("lg_indent", "orderid", $orderid, "admin/indent");
		return $del->delData();
	}
}
