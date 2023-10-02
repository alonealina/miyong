<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Miyong Support</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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
                <a href="{{ route('index') }}" class="header_a header_1">お知らせ</a>
                <a href="{{ route('index') }}" class="header_a header_2">サービス内容</a>
                <a href="{{ route('service_flow') }}" class="header_a header_3">サービスの流れ</a>
                <a href="{{ route('index') }}" class="header_a header_4">可能手術内容</a>
                <a href="{{ route('index') }}" class="header_a header_5">実施例サンプル</a>
                <a href="{{ route('index') }}" class="header_a header_6">提携クリニック</a>
                <a href="{{ route('hotel') }}" class="header_a header_7">提携ホテル</a>
            </header>
            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check" name="menu_btn">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content_work">
                    <a href="{{ route('index') }}" class="header_a header_8">お問い合わせ</a>
                    <a href="{{ route('index') }}" class="header_a header_9">運営会社</a>
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

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>

            <div class="hamburger-menu">
                <input type="checkbox" id="menu-btn-check" name="menu_btn">
                <label for="menu-btn-check" class="menu-btn"><span></span></label>
                <div class="menu-content">
                    <ul>
                        <li>
                            <a href="#coffee_sp" class="menu_content_sp">兎珈琲とは</a>
                        </li>
                        <li>
                            <a href="#wall_sp" class="menu_content_sp">兎珈琲の壁</a>
                        </li>
                        <li>
                            <a href="#stair_sp" class="menu_content_sp">箪笥階段</a>
                        </li>
                        <li>
                            <a href="#glass_sp" class="menu_content_sp">昭和ガラス</a>
                        </li>
                        <li>
                            <a href="#bunny_sp" class="menu_content_sp">バニーカステラ</a>
                        </li>
                        <li>
                            <a href="#detail_sp" class="menu_content_sp">店舗情報</a>
                        </li>
                        <a href="https://www.instagram.com/_usagicoffee/?igshid=YmMyMTA2M2Y%3D" class="" target="_blank"><img src="{{ asset('img/insta.png') }}" class="header_icon_sp"></a>
                    </ul>
                </div>
            </div>

            @yield('content_sp')

            <footer class="footer_sp" style="margin-top: 30px; padding: 40px 20px;">
                <a href="{{ route('contact') }}"><img src="{{ asset('img/yazi.png') }}" style="width: 16px;">　Contact Form</a>
                <div class="footer_text_sp">THOSE WHO KNOW<br>ONLY ONE<br>COUNTRY KNOW<br>NO COUNTRY</div>
            </footer>
        </body>
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app_sp.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
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