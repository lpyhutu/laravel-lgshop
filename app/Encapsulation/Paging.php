<?php

namespace App\Encapsulation;

use Illuminate\Support\Facades\DB;

class Paging
{

    private $table;
    private $queryCriteria;
    private $condition;
    private $queryData;
    private $page;
    private $pageSize;
    private $view;

    /**
     * @param mixed $in_table 查询的表
     * @param mixed $in_queryCriteria 查询条件一
     * @param mixed $in_condition 查询约束
     * @param mixed $in_queryData  查询内容
     * @param mixed $in_page   下一页
     * @param mixed $in_pageSize  每页显示几条
     * @param mixed $in_view  返回视图
     * @return void
     */
    function __construct($in_table, $in_queryCriteria, $in_condition, $in_queryData, $in_page, $in_pageSize, $in_view)
    {
        $this->table = $in_table;
        $this->queryCriteria = $in_queryCriteria;
        $this->condition = $in_condition;
        $this->queryData = $in_queryData;
        $this->page = $in_page;
        $this->pageSize = $in_pageSize;
        $this->view = $in_view;
    }
    /**
     * @return int 获取总数量
     */
    function getTotal()
    {
        if ($this->queryCriteria == null) {
            return DB::table($this->table)->count();
        }
        return DB::table($this->table)->where($this->queryCriteria, $this->condition, $this->queryData)->count();
    }
    /**
     * @return float|false 获取平均数量
     */
    function getAvgTotal()
    {
        return  ceil($this->getTotal() / $this->pageSize);
    }
    /**
     * @return int|false 判断下一页是否为空，是返回1
     */
    private function check_page()
    {
        if ($this->page == null) {
            return 1;
        }
        return false;
    }
    /**
     * @return int|false 判断下一页是否大于平均后的页数，是返回1
     */
    private function check_page_size()
    {
        if ($this->page > $this->getAvgTotal()) {
            return 1;
        }
        return $this->page;
    }
    /**
     * @return int|false 获取当前页数
     */
    function getCurrentPage()
    {
        if ($this->check_page()) {
            return $this->check_page();
        }
        return  $this->check_page_size();
    }
    /**
     * @return int|false 获取截取数据起的数量/从哪开始截取的数
     */
    private function newPage()
    {
        $page = $this->getCurrentPage() - 1;
        if ($page != 0) {
            return $this->pageSize * $page;
        }
        return $page;
    }
    /**
     * @return \Illuminate\Support\Collection 
     * 判断查询条件是否为空/空就执行没条件的语句
     */
    private function isCondition()
    {
        if ($this->queryCriteria == null) {
            return DB::table($this->table)->offset($this->newPage())->limit($this->pageSize)->get();
        }
        return DB::table($this->table)->where($this->queryCriteria, $this->condition, $this->queryData)
            ->offset($this->newPage())->limit($this->pageSize)->get();
    }
    /**
     * @return \Illuminate\Support\Collection 获取总数据
     */
    function getAllData()
    {
        return $this->isCondition();
    }

    /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     * 返回视图
     */
    function pagingView()
    {
        return view($this->view, [
            "ob" => $this->getAllData(),
            "pageSize" => $this->pageSize,
            "reTotal" => $this->getTotal(),
            "avgTotal" => $this->getAvgTotal(),
            "currentPage" => $this->getCurrentPage(),
        ]);
    }
}
