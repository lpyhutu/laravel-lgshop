<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', "Front\IndexController@index"); //默认
Route::group(['prefix' => 'front', 'namespace' => 'Front'], function () {
    Route::get("index", "IndexController@index"); //主页
    Route::get("code", "UserController@code"); //验证码
    Route::get('login', "UserController@login"); //登陆
    Route::get('check', "UserController@check"); //登陆请求
    Route::get('logout', "UserController@logout"); //退出请求
    Route::get('register', "RegisterController@register"); //注册
    Route::post('toregister', "RegisterController@toregister"); //注册请求
    Route::get('recommend', "GoodsController@recommend")->name('front/recommend'); //商品分页
    Route::get('infor', "CarController@infor")->name('front/infor'); //商品展示
    Route::post('getcar', "CarController@getCar")->name('front/getcar'); //ajax
    Route::get("adver", "AdverController@adver")->name('front/adver'); //公告
    Route::group(['middleware' => 'login'], function () {
        Route::get('showCar', "CarController@showCar")->name('front/showCar'); //购物车
        Route::get('upnum', "CarController@upnum")->name('front/upnum'); //修改数量
        Route::post('content', "CarController@content")->name('front/content'); //添加商品规格及分期
        Route::get('addcar', "CarController@addcar")->name('front/addcar'); //添加商品
        Route::get('delgoods', "CarController@delgoods")->name('front/delgoods'); //删除商品
        Route::get('clearCar', "CarController@clearCar")->name('front/clearCar'); //清除购物车
        Route::get('order', "OrderController@order")->name('front/order'); //收货信息
        Route::post('addorder', "OrderController@addorder")->name('front/addorder'); //执行购买请求
        Route::get('indent', "OrderController@indent")->name('front/indent'); //订单展示
        Route::get('delindent', "OrderController@delindent")->name('front/delindent'); //删除订单
        Route::get('collect', "CollectController@collect")->name('front/collect'); //我的收藏 
        Route::get('addCollect', "CollectController@addCollect")->name('front/addCollect'); //添加收藏 
        Route::get('delCollect', "CollectController@delCollect")->name('front/delCollect'); //删除收藏 
        Route::get('clearCollect', "CollectController@clearCollect")->name('front/clearCollect'); //清空收藏 
        
    });
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get("login", "AdminController@login"); //登陆
    Route::get("register", "AdminController@register"); //注册
    Route::post("toregister", "AdminController@toregister"); //注册请求
    Route::get("admincheck", "AdminController@admincheck")->name('admin/admincheck'); //登陆请求
    Route::group(['middleware' => 'adminlogin'], function () {
        Route::post("/changeAdmin", "AdminController@changeAdmin")->name('admin/changeAdmin'); //修改用户
        Route::get("/goods", "GoodsController@goods"); //商品展示
        Route::post("/addgoods", "GoodsController@addgoods")->name('admin/addgoods'); //添加商品
        Route::get("/showGoods", "GoodsController@showGoods")->name('admin/showGoods'); //管理商品
        Route::get("/delgoods", "GoodsController@delgoods")->name('admin/delgoods'); //删除商品
        Route::get("/upgoods", "GoodsController@upgoods")->name('admin/upgoods'); //修改商品
        Route::post("/delallgoods", "GoodsController@delallgoods")->name('admin/delallgoods'); //删除所选
        Route::get("/showType", "TypeController@showType")->name('admin/showType'); //商品类别 
        Route::post("/typeisShow", "TypeController@displayType")->name('admin/typeisShow'); //是否显示到前台 
        Route::get("/addType", "TypeController@addtype"); //添加类别 
        Route::post("/toAddType", "TypeController@toAddType")->name('admin/toAddType'); //添加请求 
        Route::get("/deltype", "TypeController@deltype")->name('admin/deltype'); //删除请求
        Route::post("/delalltype", "TypeController@delalltype")->name('admin/delalltype'); //删除所选
        Route::get("/uptype", "TypeController@uptype")->name('admin/uptype'); //更新请求
        Route::get("/user", "AdminController@user")->name('admin/user'); //会员管理
        Route::get("/deluser", "AdminController@deluser")->name('admin/deluser'); //删除会员
        Route::post("/delalluser", "AdminController@delalluser")->name('admin/delalluser'); //删除所选
        Route::get("/admin", "AdminController@admin"); //管理员管理
        Route::get("/editAdver", "AdverController@editAdver")->name('admin/editAdver'); //管理公告
        Route::get("/addAdver", "AdverController@addAdver")->name('admin/addAdver'); //添加公告
        Route::post("/adverisShow", "AdverController@adverisShow")->name('admin/adverisShow'); //是否显示到前台
        Route::post("/toadd", "AdverController@toadd")->name('admin/toadd'); //添加请求
        Route::get("/upadver", "AdverController@upadver")->name('admin/upadver'); //更新请求
        Route::get("/deladver", "AdverController@deladver")->name('admin/deladver'); //删除请求
        Route::post("/delalladver", "AdverController@delalladver")->name('admin/delalladver'); //删除所选
        Route::get("/indent", "OrderController@indent")->name('admin/indent'); //订单管理
        Route::get("/delindent", "OrderController@delindent")->name('admin/delindent'); //删除订单
    });
});
