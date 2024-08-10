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
    <header class="header">
        <div class="conts-body">
            <button class="hamburger">
                <span class="hamburger_bar"></span>
                <span class="hamburger_bar"></span>
                <span class="hamburger_bar"></span>
            </button>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="">ナビゲーション1</a></li>
                    <li class="nav-item"><a href="">ナビゲーション2</a></li>
                    <li class="nav-item"><a href="">ナビゲーション3</a></li>
                    <li class="nav-item"><a href="">ナビゲーション4</a></li>
                    <li class="nav-item"><a href="">ナビゲーション5</a></li>
                </ul>
            </nav>
        </div>
        <h1 class="header-ttl">Rese</h1>
    </header>
    <main>
      @yield('main')
    </main>
</body>

</html>
