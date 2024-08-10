<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
<header>
    <div class="header_content">
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--メニュー-->
            <div class="menu-content">
                <ul>
                    <li><a href="#">Home</a></li>
                    <!--Logout,Mypageに切り替え機能追加予定-->
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
        <h1 class="header_h1-title">Rese</h1>
    </div>
</header>
    <main>
        @yield('content')
    </main>
</body>

</html>
