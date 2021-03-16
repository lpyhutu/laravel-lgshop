<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Encapsulation\CheckCode;
use App\Encapsulation\CheckLogin;

class UserController
{

	function login()
	{
		//登陆
		return view('front/login');
	}

	public function code()
	{
		//验证码
		$code = new CheckCode();
		$codeone = $code->getcode(); //获得验证码
		Session::put("code", $codeone); //创建session
		echo $code->outimg(); //输出
	}

	function check(Request $request)
	{
		//匹配登陆信息
		$username = $request->get('username'); //账号
		$password = $request->get('password'); //密码
		$checkCode = $request->get('checkCode'); //验证码
		//调用CheckLogin:class(数据库表，验证码，查询条件一，查询内容，查询条件二，查询内容，返回路由)
		$check = new CheckLogin("lg_user", $checkCode, "username", $username, "password", $password, "front/index");
		return $check->checkUser();
	}

	public function logout()
	{
		//退出登陆，删除session
		Session::flush();
		return redirect('front/login');
	}
}
