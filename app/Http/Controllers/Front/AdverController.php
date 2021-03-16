<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Adver;

class AdverController extends Controller
{

	public function adver(Request $request)
	{
		//公告展示
		$id = $request->input("id");
		$ob = Adver::where('id', $id)->get();//查询
		if ($ob) {
			return view("front/adver", ["ob" => $ob]);
		}
		return redirect()->back();
	}
}
