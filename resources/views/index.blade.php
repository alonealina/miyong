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
            何かと心配になる美容整形、それも韓国での施術となれば<br>
            尚更のことと思います。<br>          
            言葉の問題・滞在期間中の問題・アフターケアの問題などなど<br>
            様々な不安があるのでは？<br>
            私たちMiyong Supportは日本と韓国それぞれに独自スタッフを<br>
            滞在させており、お一人お一人に最適なプランの策定とご説明を<br>
            貴女が納得するまで行います。
        </p>
    </div>
</section>
<div class="text_end">「不安と心配」を解消して「貴女の希望する姿」への<br>サポートをさせてください。</div>

<section id="section_2" class="top_section_2 common">
    <h2 class="pinkBorder">提携クリニック</h2>
    <div class="img_wrapper">
        <img src="{{ asset('img/sec2_bg.png') }}">
    </div>
    <div class="list_wrapper">
        <ul class="sec2_list">
            <li><img src="{{ asset('img/sec2_list1.png')}}"><h3>パクヤンス院長</h3></li>
            <li><img src="{{ asset('img/sec2_list2.png')}}"><h3>キムヨンジュン院長</h3></li>
            <li><img src="{{ asset('img/sec2_list3.png')}}"><h3>ユウォンジェ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list4.png')}}"><h3>ユアンナ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list5.png')}}"><h3>パクイヒョン院長</h3></li>
        </ul>
    </div>

    <a href="{{ route('index') }}" class="pink_btn">一覧へ</a>
    <img src="{{ asset('img/pink_yazi.png')}}" class="pink_yazi">
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

    <a href="{{ route('index') }}" class="pink_btn" style="margin-top: -4vw;">もっと詳しく</a>
    <img src="{{ asset('img/pink_yazi.png')}}" class="pink_yazi">

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
    <img src="{{ asset('img/pink_yazi.png')}}" class="pink_yazi" style="margin-right: 23.4vw;">
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
    <a href="{{ route('index') }}" class="pink_btn">一覧へ</a>
    <img src="{{ asset('img/pink_yazi.png')}}" class="pink_yazi">
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
    <a href="{{ route('index') }}" class="pink_btn">一覧へ</a>
    <img src="{{ asset('img/pink_yazi.png')}}" class="pink_yazi">
</section>

@include('item.contact')




<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection