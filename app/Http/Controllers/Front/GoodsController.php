<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Encapsulation\Paging;


class GoodsController extends Controller
{

	public function recommend(Request $request)
	{
		//新品\推荐\男装\查询结果等商品的展示
		$page = $request->input("page"); //当前页
		$pageSize = 4; //每页4条
		$titleShow = $request->input("titleShow"); //title展示
		$seachContent = $request->input("seachContent"); //搜索内容
		$type_id = $request->input("typeid"); //查询类型
		//调用封装好的Paging::class(数据库表，查询条件，查询约束，查询内容，当前页，每页几条，返回路由)
		if ($type_id == "recomgoods") {
			//推荐商品
			$data = new Paging("lg_goods", "recommend", "=", 1, $page, $pageSize, "front.goodsTypeShow");
		} else if ($type_id == "newgoods") {
			//新品
			$data = new Paging("lg_goods", "newgoods", "=", 1, $page, $pageSize, "front.goodsTypeShow");
		} else if ($type_id == "seach") {
			//查询结果
			$data = new Paging("lg_goods", "introduction", "like", "%$seachContent%", $page, $pageSize, "front.goodsTypeShow");
		} else {
			//男装\女装\家电等非以上的商品
			$data = new Paging("lg_goods", "typeid", "=", $type_id, $page, $pageSize, "front.goodsTypeShow");
		}
		return view(
			"front.goodsTypeShow",
			[
				"re" => $data->getAllData(),//总数据
				"reTotal" => $data->getTotal(),//总数量
				"avgTotal" => $data->getAvgTotal(),//平均数量
				"currentPage" => $data->getCurrentPage(),//当前页
				"typeid" => $type_id,//查询类型
				"titleShow" => $titleShow//title显示内容
			]
		);
	}
}
