<?php

namespace App\Encapsulation;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CheckLogin
{
    private $table;
    private $username;
    private $passowrd;
    private $code;
    private $queryCriteriaOne;
    private $queryCriteriaTwo;
    private $routeData;
    /**
     * @param mixed $in_table 查询的表
     * @param mixed $in_code  用户输入的验证码
     * @param mixed $in_queryCriteriaOne  查询条件一
     * @param mixed $in_username 用户名
     * @param mixed $in_queryCriteriaTwo 查询条件二
     * @param mixed $in_passowrd 密码
     * @param mixed $in_routeData 返回的路由
     * @return void
     */
    function __construct($in_table,  $in_code, $in_queryCriteriaOne, $in_username, $in_queryCriteriaTwo, $in_passowrd,  $in_routeData)
    {
        $this->table = $in_table;
        $this->code = $in_code;
        $this->queryCriteriaOne = $in_queryCriteriaOne;
        $this->username = $in_username;
        $this->queryCriteriaTwo = $in_queryCriteriaTwo;
        $this->passowrd = $in_passowrd;
        $this->routeData = $in_routeData;
    }
    /**
     * @return bool 判断验证码是否输入正确
     */
    private function checkCode()
    {
        if (strtolower($this->code) == Session::get("code")) {
            return true;
        }
        return false;
    }
    /**
     * @return bool 判断输入哪个表
     */
    private function checkTable()
    {
        if ($this->table == "lg_user") {
            return true;
        }
        return false;
    }
    /**
     * 查询匹配数据库/返回视图
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    function checkUser()
    {
        if ($this->checkCode()) {
            $ob = DB::table($this->table)->where($this->queryCriteriaOne, $this->username)
                ->where($this->queryCriteriaTwo, $this->passowrd)->first();
            if(!$ob){
                return redirect()->back(); 
            }
            if ($this->checkTable()) {
                Session::put(['username' => $this->username, 'frontid' => $ob->userid]);
            } else {
                Session::put(['name' => $this->username, 'adminid' => $ob->id]);
            }

            return redirect($this->routeData);
        }
        return redirect()->back();
    }
}
