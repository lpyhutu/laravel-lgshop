<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Encapsulation\Paging;
use App\Encapsulation\Delete;
use App\Encapsulation\CheckLogin;

class AdminController extends Controller
{

	public function login()
	{
		//登陆
		return view("admin.login");
	}
	public function register()
	{
		//注册
		return view("admin.register");
	}
	public function admin()
	{
		//管理员
		return view("admin.admin");
	}

	public function toregister(Request $request)
	{
		//注册请求
		$arr = $request->all();
		$code = $request->session()->get("code");
		if ($code == strtolower($arr["checkCode"])) {
			$ob = Admin::create($arr); //使用模型添加注册信息
			if ($ob) {
				return redirect('admin/login');
			}
			return redirect()->back();
		}
		return redirect()->back();
	}
	public function changeAdmin(Request $request)
	{
		//修改管理员信息
		$name = $request->input("newuser");
		$password = $request->input("repassword");
		$id = Session::get("adminid");
		$ob = Admin::where("id", $id)->update(["name" => $name, "password" => $password]);
		if ($ob) {
			Session::put(['name' => $name]);
			return redirect("admin/admin");
		}
		return redirect()->back();
	}
	function admincheck(Request $request)
	{
		//登陆匹配
		$username = $request->get('name');
		$password = $request->get('password');
		$checkCode = strtolower($request->get('checkCode'));
		//调用CheckLogin::class(数据库表，验证码，查询条件一，查询内容一，查询条件二，查询内容二，返回路由)
		$check = new CheckLogin("lg_admin", $checkCode, "name", $username, "password", $password, "admin/goods");
		return $check->checkUser();
	}

	public function user(Request $request)
	{
		//会员管理
		$pageSize = 10;//每页数量
		$page = $request->input("page");
		//调用Paging::class(数据库表，查询条件，查询约束，查询内容，下一页，每页数量，返回路由)
		$data = new Paging("lg_user", null, null, null, $page, $pageSize, "admin.user");
		return $data->pagingView();
	}
	public function deluser(Request $request)
	{
		//删除单个请求
		$userid[] = $request->input("userid");
		//调用Delete::class(数据库表，查询条件，查询内容，返回路由)
		$del = new Delete("lg_user", "userid", $userid, "admin/user");
		return $del->delData();
	}

	public function delalluser(Request $request)
	{
		//删除所选请求
		$userid = $request->input("userid");
		$del = new Delete("lg_user", "userid", $userid, "admin/user");
		return $del->delData();
	}
}
