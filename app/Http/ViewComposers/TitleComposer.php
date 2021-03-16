<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TitleComposer extends ServiceProvider

{
    public function boot()
    {
        //加载视图时，回调该class并查询相关信息
        View::composer(["front.index", "front.goodsTypeShow", "front.infor"], function ($view) {
            $adverTitle = DB::table("lg_advertisement")->where("displayType", 1)->get();
            $typeTitle = DB::table("lg_type")->where("displayType", 1)->get();
            $view->with('adverTitle', $adverTitle)->with("typeTitle", $typeTitle);
        });
    }
}
