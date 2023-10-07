@extends('layouts.app')


@section('content')
<img src="{{ asset('img/miyong_main.png') }}" class="main_img" id="main_img">
<section id="section_1" class="floating_box top_section_1 common">
    <div class="floating_box_left">
        <div class="img_wrapper">
            <img src="{{ asset('img/content_img1.png') }}" class="content_img">
        </div>
    </div>
    <div class="floating_box_right">
        <h2>美容大国<b>「韓国」</b>での美容整形をフルサポート</h2>
        <p>
            何かと心配になる美容整形、それも韓国での施術となれば尚更のことと思います。<br>          
            言葉の問題・滞在期間中の問題・アフターケアの問題などなど様々な不安があるのでは？<br>
            私たちMiyong Supportは日本と韓国それぞれに独自スタッフを滞在させており、<br>
            お一人お一人に最適なプランの策定とご説明を貴女が納得するまで行います。
        </p>
    </div>
</section>
<div class="text_end">「不安と心配」を解消して「貴女の希望する姿」への<br>サポートをさせてください。</div>

<section id="section_2" class="top_section_2 common">
    <div class="sec_title">提携クリニック</div>
    <div class="img_wrapper">
        <img src="{{ asset('img/sec2_bg.png') }}" class="hospital_bg">
    </div>
    <div class="list_wrapper">
        <ul class="sec2_list">
            <li><img src="{{ asset('img/sec2_list1.png')}}"><h3>パクヤンス院長</h3></li>
            <li><img src="{{ asset('img/sec2_list2.png')}}"><h3>キムヨンジュン院長</h3></li>
            <li><img src="{{ asset('img/sec2_list3.png')}}"><h3>ユウォンジェ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list4.png')}}"><h3>ユアンナ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list5.png')}}"><h3>パクイヒョン院長</h3></li>
            <li><img src="{{ asset('img/sec2_list6.png')}}"><h3>チョスンウ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list7.png')}}"><h3>イジョエン院長</h3></li>
        </ul>
    </div>

    <a href="{{ route('cooperation') }}" class="pink_btn">一覧へ</a>
</section>

<section id="section_3" class="top_section_3 common">
    <div class="sec3_bg">
        <div class="sec3_bg_box">
            貴女の為だけの<span class="sec3_span">最適なプラン</span> を<br>
            <span class="sec3_span">Miyong Support</span> で!!
        </div>
        〇 韓国芸能人・モデルのような顔になりたい<br>
        〇 代理店に任せて悩む時間を減らしたい<br>
        〇 医療だけでなく現地の観光情報も欲しい
    </div>

    <div class="sec3_flex">
        <div class="sec3_text">
            <div class="sec3_flex_title">だけどやっぱり…</div>
            → 韓国語が話せないので不安<br>
            → 滞在中にトラブルがあったら？<br>
            → どこの美容クリニックがよいか分からない<br>
            → 予算に合うか不安
        </div>
        <img src="{{ asset('img/sec3_dummy.png')}}" class="sec3_dummy">
    </div>
</section>

<div class="miyong_title">Miyong Support に<br>すべてお任せください！</div>

<section id="section_4" class="top_section_4 common">
    <div class="sec_title">サービスの流れ</div>
    <div class="sec4_service_list">
        <div class="sec4_service">
            <img src="{{ asset('img/service1.png')}}">
            お問合せ
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service2.png')}}">
            ご希望内容の確認
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service3.png')}}">
            病院やホテル等の<br>
            ご提案と選択<br>
            ＋<br>
            １次見積りの提案
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service4.png')}}">
            病院とのオンライン<br>
            相談・診断
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service5.png')}}">
            ホテルや送迎等の<br>
            ご提案と選択<br>
            ＋<br>
            ２次見積りの提案
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service6.png')}}">
            日程の決定と<br>プランの決定
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service7.png')}}">
            契約<br>費用のお振り込み
        </div>
    </div>

    <div class="sec4_text">
        ※空港からホテル・病院までの送迎完備<br>
        ※病院での翻訳及び通訳、付き添い<br>
        ※その他韓国滞在中は完全サポート（日本語対応）
    </div>

    <a href="{{ route('service_flow') }}" class="pink_btn" style="margin-top: -4vw;">もっと見る</a>

</section>

@include('item.social_link')

<section id="section_6" class="top_section_6 common">
    <div class="sec6_title1">なぜ韓国は美容大国なのか？</div>
    <div class="sec6_title2">（韓国観光公社公式サイトから）</div>
    K-POP、韓国ドラマなど世界的な韓流ブームに伴い、<br>
    韓国は世界のビューティートレンドをリードしています。<br>
    「K-Beauty」に憧れる外国人にとって韓国の美容整形手術は<br>
    「医術」を越えた<span class="sec6_span">「人生のターニングポイント」</span>となり、<br>
    たくさんの外国人が韓国の美容外科を訪れています。

    <a href="{{ route('why') }}" class="pink_btn" style="margin: 3vw auto 0;">もっと詳しく</a>
</section>

<section id="section_7" class="top_section_7 common">
    <div class="sec_title">提携ホテル</div>
    <div class="sec7_hotel_list">
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel1.png')}}">
            OCLOUS HOTEL
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel2.png')}}">
            HOTEL THE DESIGNERS
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel3.png')}}">
            PREMIER BEST WESTREN.
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel4.png')}}">
            Aiden by BEST WESTERN
        </a>
    </div>
    <a href="{{ route('hotel') }}" class="pink_btn">一覧へ</a>
</section>

<section id="section_8" class="top_section_8 common">
    <div class="sec_title">お知らせ</div>
    <div class="sec8_news_list">
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">一般</div>
            <div class="sec8_news_title">textextextextextextextextextextextext</div>
        </a>
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">その他</div>
            <div class="sec8_news_title">テスト</div>
        </a>
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">一般</div>
            <div class="sec8_news_title">テスト</div>
        </a>
    </div>
    <a href="{{ route('news') }}" class="pink_btn">一覧へ</a>
</section>

@include('item.contact')




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/main_img_sp.png') }}" class="main_img_sp" id="main_img">


<div class="sec1_title">美容大国<span class="sec1_title_b">「韓国」</span>での美容整形をフルサポート</div>
<div class="sec1_text">
    何かと心配になる美容整形、それも韓国での施術となれば<br>
    尚更のことと思います。<br>          
    言葉の問題・滞在期間中の問題・アフターケアの問題などなど<br>
    様々な不安があるのでは？<br>
    私たちMiyong Supportは日本と韓国それぞれに独自スタッフを<br>
    滞在させており、お一人お一人に最適なプランの策定と<br>ご説明を貴女が納得するまで行います。
</div>
<div class="text_end_sp">「不安と心配」を解消して「貴女の希望する姿」への<br>サポートをさせてください。</div>

<img src="{{ asset('img/sec1_img_sp.png') }}" class="content_img">



<div class="sec_title">提携クリニック</div>

<div class="sec2_sp">
    <img src="{{ asset('img/sec2_bg_sp.png') }}" style="width: 100%;">

    <div class="sec2_list_sp">
        <div class="sec2_item"><img src="{{ asset('img/sec2_list1.png')}}" class="sec2_img"><div class="sec2_name">パクヤンス院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list2.png')}}" class="sec2_img"><div class="sec2_name">キムヨンジュン院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list3.png')}}" class="sec2_img"><div class="sec2_name">ユウォンジェ院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list4.png')}}" class="sec2_img"><div class="sec2_name">ユアンナ院長</div></div>
        <div class="sec2_item_last"><img src="{{ asset('img/sec2_list5.png')}}" class="sec2_img"><div class="sec2_name">パクイヒョン院長</div></div>
        <div class="sec2_item_last"><img src="{{ asset('img/sec2_list6.png')}}" class="sec2_img"><div class="sec2_name">チョスンウ院長</div></div>
    </div>
</div>

<a href="{{ route('cooperation') }}" class="pink_btn">一覧へ</a>




<div class="sec3_bg">
    <div class="sec3_bg_box">
        貴女の為だけの<span class="sec3_span">最適なプラン</span> を<br>
        <span class="sec3_span">Miyong Support</span> で!!
    </div>
    〇 韓国芸能人・モデルのような顔になりたい<br>
    〇 代理店に任せて悩む時間を減らしたい<br>
    〇 医療だけでなく現地の観光情報も欲しい
</div>

<div class="sec3_text">
    <div class="sec3_flex_title">だけどやっぱり…</div>
    → 韓国語が話せないので不安<br>
    → 滞在中にトラブルがあったら？<br>
    → どこの美容クリニックがよいか分からない<br>
    → 予算に合うか不安
</div>
<div class="miyong_title">Miyong Support に<br>すべてお任せください！</div>

<section id="section_4" class="top_section_4 common">
    <div class="sec_title">サービスの流れ</div>
    <div class="sec4_service_list">
        <div class="sec4_service">
            <img src="{{ asset('img/service1.png')}}">
            お問合せ
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service2.png')}}">
            ご希望内容の確認
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service3.png')}}">
            病院やホテル等の<br>
            ご提案と選択<br>
            ＋<br>
            １次見積りの提案
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service4.png')}}">
            病院とのオンライン<br>
            相談・診断
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service5.png')}}">
            ホテルや送迎等の<br>
            ご提案と選択<br>
            ＋<br>
            ２次見積りの提案
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service6.png')}}">
            日程の決定と<br>プランの決定
        </div>
        <div class="sec4_service">
            <img src="{{ asset('img/service7.png')}}">
            契約<br>費用のお振り込み
        </div>
    </div>

    <div class="sec4_text">
        ※空港からホテル・病院までの送迎完備<br>
        ※病院での翻訳及び通訳、付き添い<br>
        ※その他韓国滞在中は完全サポート（日本語対応）
    </div>

    <a href="{{ route('service_flow') }}" class="pink_btn">もっと詳しく</a>
    

</section>

<section id="section_5" class="top_section_5">
    ご相談は <span class="sec5_span">24時間</span> いつでも受付中!!<br>
    LINEやInstagramから気軽にお問合せ
    <div class="sec5_icon_list">
        <a href="#!" style=""><img src="{{ asset('img/line.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/kakao.png') }}" class="sec5_icon"></a>
        <a href="#!" style=""><img src="{{ asset('img/insta.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/twitter.png') }}" class="sec5_icon"></a>
    </div>
</section>

<section id="section_6" class="top_section_6 common">
    <div class="sec6_title1">なぜ韓国は美容大国なのか？</div>
    <div class="sec6_title2">（韓国観光公社公式サイトから）</div>
    K-POP、韓国ドラマなど世界的な韓流ブームに伴い、<br>
    韓国は世界のビューティートレンドをリードしています。<br>
    「K-Beauty」に憧れる外国人にとって韓国の美容整形手術は<br>
    「医術」を越えた<span class="sec6_span">「人生のターニングポイント」</span><br>
    となり、たくさんの外国人が韓国の美容外科を訪れています。

    <a href="{{ route('why') }}" class="pink_btn" style="margin: 30px auto 0;">もっと詳しく</a>
</section>

<section id="section_7" class="top_section_7 common">
    <div class="sec_title">提携ホテル</div>
    <div class="sec7_hotel_list">
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel1.png')}}">
            OCLOUS HOTEL
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel2.png')}}">
            HOTEL THE DESIGNERS
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel3.png')}}">
            PREMIER BEST WESTREN.
        </a>
        <a href="{{ route('index') }}" class="sec7_hotel">
            <img src="{{ asset('img/hotel4.png')}}">
            Aiden by BEST WESTERN
        </a>
    </div>
    <a href="{{ route('hotel') }}" class="pink_btn">もっと詳しく</a>
    
</section>

<section id="section_8" class="top_section_8 common">
    <div class="sec_title">お知らせ</div>
    <div class="sec8_news_list">
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">一般</div>
            <div class="sec8_news_title">textextextextextextextextextextextext</div>
        </a>
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">その他</div>
            <div class="sec8_news_title">テスト</div>
        </a>
        <a href="{{ route('index') }}" class="sec8_news">
            <div class="sec8_news_date">2023/04/01</div>
            <div class="sec8_news_genre">一般</div>
            <div class="sec8_news_title">テスト</div>
        </a>

    </div>
    <a href="{{ route('news') }}" class="pink_btn">一覧へ</a>
    
</section>

<section id="section_9" class="top_section_9">
    <div class="sec_title">お問い合わせ</div>
    <div class="contact_wrapper">
    <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="contact_name_top">お名前</div>
        <input class="contact_text_top" placeholder="お名前" name="name" type="text" id="name">
        <div class="contact_name_top">メールアドレス</div>
        <input class="contact_text_top" placeholder="メールアドレス" name="mail" type="text" id="mail">
        <div class="contact_name_top">タイトル</div>
        <input class="contact_text_top" placeholder="例)サービスについて、予約について" name="title" type="text" id="title">
        <div class="contact_name_top">お問い合わせ内容</div>
        <textarea class="contact_textarea_top" placeholder="" name="content" id="content"></textarea>
        <input type="hidden" name="recaptchaToken" id="recaptchaToken">
        <div class="g-recaptcha mt-3" data-sitekey="6Lc8TFonAAAAAKJqDjHHXEF-E9R-ODofyBtg6GMj" data-callback="callback_recaptcha"></div>
        <a href="#!" onclick="clickMailButton()" class="send_btn"><img src="{{ asset('img/send_btn.png')}}"></a>
        <div class="error_message" id="error_message"></div>
    </form>
    </div>
    <p class="contact">Copyright（C）Beauty Support All rights reserved.</p>
</section>







<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection