<?php

namespace App\Encapsulation;

use Illuminate\Support\Facades\DB;

class Delete
{
    private $table;
    private $queryCriteria;
    private $queryData;
    private $routeData;
    /**
     * @param mixed $in_table 删除的表
     * @param mixed $in_queryCriteria 删除条件一
     * @param mixed $in_queryData 删除内容
     * @param mixed $in_routeData 返回的路由
     * @return void
     */
    function __construct($in_table, $in_queryCriteria, $in_queryData, $in_routeData)
    {
        $this->table = $in_table;
        $this->queryCriteria = $in_queryCriteria;
        $this->queryData = $in_queryData;
        $this->routeData = $in_routeData;
    }
    /**
     * 匹配数据库，删除信息/返回视图
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    function delData()
    {
        for ($i = 0; $i < count($this->queryData); $i++) {
            $ob = DB::table($this->table)->where($this->queryCriteria, $this->queryData[$i])->delete();
        }
        if ($ob) {
            return redirect($this->routeData);
        }
        return redirect()->back();
    }
}
