<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Front;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

	public function register()
	{
		//注册
		return view("front/register");
	}


	public function toregister(Request $request)
	{
		//注册请求
		$arr = $request->all(); //获取用户输入的信息
		$arr["regdate"] = date("Y-m-d H:i:s"); //当前系统时间
		$code = $request->session()->get("code"); //验证码
		if ($code == strtolower($arr["checkCode"])) {
			$ob = Front::create($arr); //使用model添加用户注册信息
			if ($ob) {
				return redirect('front/login'); //跳转到登陆
			} else {
				return redirect()->back();
			}
		} else {
			return redirect()->back();
		}
	}
}
