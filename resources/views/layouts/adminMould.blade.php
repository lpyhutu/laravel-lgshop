<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{asset('js/jquery-1.11.0.js')}}"></script>
    <script>
        function delall() {
            var chk_value = [];
            $('input[class="delall"]:checked').each(function() {
                chk_value.push($(this).val());
            });
            if (chk_value.length == 0) {
                alert('请先勾选您要删除的内容');
                return false;
            } else {
                if (confirm('是否删除所选内容？')) {
                    return true;
                } else {
                    return false;
                }

            }
        }
    </script>

    <style type="text/css">
        #footer {
            clear: both;
            width: 900px;
            text-align: center;
            margin-top: 20px;
            height: 40px;
            padding-top: 5px;
            background-color: #254B62;
        }

        #footer p {
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1><img src="{{ asset('images/LeGo.png')}}" width="130" height="80" />乐GO后台管理界面</h1>
    </div>
    <div id="left">
        <div>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />商品管理<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="{{url('admin/goods')}}">填加商品</a></li>
                <li><a href="{{url('admin/showGoods')}}">管理商品</a></li>
            </ul>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />类别管理<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="{{url('admin/addType')}}">填加类别</a></li>
                <li><a href="{{url('admin/showType')}}">编辑类别</a></li>
            </ul>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />用户管理<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="{{url('admin/user')}}">会员管理</a></li>
                <li><a href="{{url('admin/admin')}}">管理员管理</a></li>
            </ul>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />订单管理<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="{{url('admin/indent')}}">管理订单</a></li>
            </ul>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />公告管理<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="{{url('admin/addAdver')}}">添加公告</a></li>
                <li><a href="{{url('admin/editAdver')}}">编辑公告</a></li>
            </ul>
            <h3><img src="{{ asset('images/houtai1_03.gif')}}" />数据统计<img src="{{ asset('images/houtai1_03.gif')}}" /></h3>
            <ul>
                <li><a href="barSalesrankingsOfGoods.php">商品销售排名柱状图</a></li>
                <li><a href="pieSalesrankingOfType.php">商品分类销售饼状图</a></li>
            </ul>

        </div>
    </div>
    <div id="right">
        @yield('main')
    </div>
    <div id="footer" style="color: #fff;">
        <p>Copyright © 2020-2021 lpya.cn All Rights Reserved</p>
        <p><a style="color: #fff;" href="http://beian.miit.gov.cn" target="_blank">备案号：粤ICP备20027673号</a> </p>
    </div>
</body>

</html>