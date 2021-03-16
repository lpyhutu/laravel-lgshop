<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Index;


class IndexController extends Controller
{

	public function index()
	{
		//主页
		$ob = Index::where('recommend', 1)->limit(9)->get(); //查询推荐
		$oj = Index::where('newgoods', 1)->limit(8)->get(); //查询新品
		if ($ob) {
			return view("front/index", ["ob" => $ob, "oj" => $oj]);
		} else {
			return redirect()->back();
		}
	}
}
