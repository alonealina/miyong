<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Miyong Support</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>

    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header>
                <a href="{{ route('index') }}" class=""><img src="{{ asset('img/header_logo.png') }}" class="header_logo"></a>
                <a href="{{ route('news') }}" class="header_a header_1">お知らせ</a>
                <a href="{{ route('index') }}" class="header_a header_2">サービス内容</a>
                <a href="{{ route('service_flow') }}" class="header_a header_3">サービスの流れ</a>
                <a href="{{ route('index') }}" class="header_a header_4">可能手術内容</a>
                <a href="{{ route('sample') }}" class="header_a header_5">実施例サンプル</a>
                <a href="{{ route('cooperation') }}" class="header_a header_6">提携クリニック</a>
                <a href="{{ route('hotel') }}" class="header_a header_7">提携ホテル</a>
            </header>
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check" name="menu_btn">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <a href="{{ route('contactform') }}" class="header_a header_8">お問い合わせ</a>
                    <a href="{{ route('company') }}" class="header_a header_9">運営会社</a>
                    <a href="{{ route('index') }}" class="header_a header_10">目の整形</a>
                    <a href="{{ route('index') }}" class="header_a header_11">鼻の整形</a>
                    <a href="{{ route('index') }}" class="header_a header_12">両顎&輪郭整形</a>
                    <a href="{{ route('index') }}" class="header_a header_13">胸・ボディ</a>
                    <a href="{{ route('index') }}" class="header_a header_14">整形注射</a>
                    <a href="{{ route('index') }}" class="header_a header_15">アンチエイジング</a>
                    <a href="{{ route('index') }}" class="header_a header_16">各種再手術</a>
                    <a href="{{ route('index') }}" class="header_a header_17">その他</a>
                </div>
            </div>

            <div class="right_menu">
                <a href="#!" id="right_menu_close" onclick="clickOpen()">
                    <div class="right_menu_text">チャット相談</div>
                    <img src="{{ asset('img/down.png') }}" class="yazi">
                </a>
                <a href="#!" id="right_menu_open" onclick="clickClose()" style="display:none">
                    <img src="{{ asset('img/mail.png') }}" class="right_menu_img">
                    <div class="right_menu_text">メール相談</div>

                    <img src="{{ asset('img/line.png') }}" class="right_menu_img">
                    <div class="right_menu_text">LINE相談</div>

                    <img src="{{ asset('img/kakao.png') }}" class="right_menu_img">
                    <div class="right_menu_text">KAKAO TALK<br>相談</div>

                    <img src="{{ asset('img/insta.png') }}" class="right_menu_img">
                    <div class="right_menu_text">instagram</div>

                    <img src="{{ asset('img/twitter.png') }}" class="right_menu_img">
                    <div class="right_menu_text">Twitter</div>

                    <img src="{{ asset('img/up.png') }}" class="yazi">
                </a>

            </div>

            <div class="header_margin"></div>

            @yield('content')

        </body>
    </div>
    <script src="{{ asset('js/header.js') }}"></script>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>

            <header>
                <a href="{{ route('index') }}" class=""><img src="{{ asset('img/header_logo.png') }}" class="header_logo"></a>
            </header>
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check" name="menu_btn">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <div class="header_flex">
                        <div class="header_column">
                            <a href="{{ route('index') }}" class="header_a">お知らせ</a>
                            <a href="{{ route('index') }}" class="header_a">サービス内容</a>
                            <a href="{{ route('service_flow') }}" class="header_a">サービスの流れ</a>
                            <a href="{{ route('cooperation') }}" class="header_a">提携クリニック</a>
                            <a href="{{ route('hotel') }}" class="header_a">提携ホテル</a>
                            <a href="{{ route('index') }}" class="header_a">お問い合わせ</a>
                            <a href="{{ route('index') }}" class="header_a">運営会社</a>
                        </div>

                        <div class="header_column">
                            <a href="{{ route('index') }}" class="header_a" style="margin-bottom: 20px;">可能手術内容</a>
                            <a href="{{ route('index') }}" class="header_a_s">目の整形</a>
                            <a href="{{ route('index') }}" class="header_a_s">鼻の整形</a>
                            <a href="{{ route('index') }}" class="header_a_s">両顎&輪郭整形</a>
                            <a href="{{ route('index') }}" class="header_a_s">胸・ボディ</a>
                            <a href="{{ route('index') }}" class="header_a_s">整形注射</a>
                            <a href="{{ route('index') }}" class="header_a_s">アンチエイジング</a>
                            <a href="{{ route('index') }}" class="header_a_s">各種再手術</a>
                            <a href="{{ route('index') }}" class="header_a_s">その他</a>
                            <a href="{{ route('sample') }}" class="header_a">実施例サンプル</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="right_menu">
                <a href="#!" id="right_menu_close" onclick="clickOpenSp()">
                    <div class="right_menu_text">チャット相談</div>
                    <img src="{{ asset('img/down.png') }}" class="yazi">
                </a>
                <a href="#!" id="right_menu_open" onclick="clickCloseSp()" style="display:none">
                    <img src="{{ asset('img/mail.png') }}" class="right_menu_img">
                    <div class="right_menu_text">メール相談</div>

                    <img src="{{ asset('img/line.png') }}" class="right_menu_img">
                    <div class="right_menu_text">LINE相談</div>

                    <img src="{{ asset('img/kakao.png') }}" class="right_menu_img">
                    <div class="right_menu_text">KAKAO TALK<br>相談</div>

                    <img src="{{ asset('img/insta.png') }}" class="right_menu_img">
                    <div class="right_menu_text">instagram</div>

                    <img src="{{ asset('img/twitter.png') }}" class="right_menu_img">
                    <div class="right_menu_text">Twitter</div>

                    <img src="{{ asset('img/up.png') }}" class="yazi">
                </a>

            </div>

            <div class="header_margin"></div>

            @yield('content_sp')

        </body>
    </div>
    <script src="{{ asset('js/header_sp.js') }}"></script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script type="text/javascript">
    if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) 
        || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
        document.getElementById('registration_pc').style.display = "none";
        document.getElementById('registration_sp').style.visibility = "visible";
    } else {
        document.getElementById('registration_sp').style.display = "none";
    }
    </script>
</html>