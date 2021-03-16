<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404未知响应</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        #error {
            position: absolute;
            height: 100%;
            width: 100%;
            background-image: linear-gradient(#e66465, #9198e5);
        }

        #error-title {
            margin: auto;
            margin-top: 60px;
            height: 70px;
            width: 900px;
            text-align: right;
            line-height: 70px;
            font-size: 30px;
            color: #9198e5;
            font-weight: bold;
        }

        #error-content {
            margin: auto;
            width: 900px;
            height: 400px;
            background: #FFFFFF;
            border: 1px solid #FFFFFF;
            border-radius: 20px;

        }

        .content-left {
            width: 450px;
            height: 100%;
            border-radius: 20px 0 0 20px;
            background-image: url({{asset('images/404.jpg')}});
            background-size: cover;
            float: left;

        }

        .content-right {
            width: 450px;
            height: 100%;
            border-radius: 20px 20 20 20px;
            float: right;

        }

        .content-right img {
            margin-top: 20px;
        }

        #tip {
            font-size: 23px;
            margin-left: 20px;
            margin-top: 10px;
            color: #9198e5;
            letter-spacing: 2px;
            line-height: 40px;
            font-weight: bold;
        }

        .btn {

            width: 180px;
            height: 100px;
            margin: auto;
            margin-top: 40px;
        }

        button {
            width: 180px;
            height: 40px;
            letter-spacing: 8px;
            background: #9198e5;
            color: #FFFFFF;
            font-weight: bold;
        }

        button:hover {
            background: #e66465;
        }
    </style>

</head>

<body>
    <div id="error">
        <div id="error-title">
            各种好用的商品尽在乐GO商城
        </div>
        <div id="error-content">
            <div class="content-left">
            </div>
            <div class="content-right">
                <img src="{{asset('images/404_one.jpg')}}" width="140" height="140" />
                <div id="tip">
                    Sorry ! The page you’re looking for cannot be found.
                </div>
                <div class="btn">
                    <a href="{{url('front/index')}}"><button type="button">返回首页</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>