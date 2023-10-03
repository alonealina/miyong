@extends('layouts.app')


@section('content')

<div class="page_title">提携クリニック</div>

<section id="section_1" class="coop_section1 coop">
    <div>
        <div class="img_wrapper"><img src="{{ asset('img/cooperation_bg.png')}}"></div>
        <div class="img_btn"><img src="{{ asset('img/cooperation_btn.png')}}"></div>
    </div>
</section>

<section id="section_2" class="top_section_2 coop_common">
    <div class="coop_text">
        <h3>ドリーム整形外科</h3>
        <p>
            分野別の経験豊富な専門医で構成された安心と実績のクリニックです。<br>
            韓国以外にも全国に展開しており、19年の歴史を誇ります。<br>
            詳しくは<a href="https://ja.e-dream.co.kr/01_intro/index.php?">HP</a>へ。
        </p>
    </div>
    <div class="img_wrapper">
        <img src="{{ asset('img/sec2_bg.png') }}">
    </div>
    <div class="list_wrapper">
        <ul class="sec2_list slick01 slick-slider">
            <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"><img src="{{ asset('img/sec2_list1.png')}}"><h3>パクヤンス院長</h3></li>
            <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"><img src="{{ asset('img/sec2_list2.png')}}"><h3>キムヨンジュン院長</h3></li>
            <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"><img src="{{ asset('img/sec2_list3.png')}}"><h3>ユウォンジェ院長</h3></li>
            <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"><img src="{{ asset('img/sec2_list4.png')}}"><h3>ユアンナ院長</h3></li>
            <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"><img src="{{ asset('img/sec2_list5.png')}}"><h3>パクイヒョン院長</h3></li>
            <li><img src="{{ asset('img/sec2_list6.png')}}"><h3>チョスンウ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list7.png')}}"><h3>イジョエン院長</h3></li>
        </ul>
    </div>
</section>

<section id="section_2" class="top_section_2 coop_common">
    <div class="coop_text">
        <h3>リエンジャン美容外科</h3>
        <p>
            2003年から美容整形・皮膚科を経営しているアジア最大のネットワーク病院です。<br>
            6種類の専門センターを運営しており、幅広い分野別の専門医があなたの理想を叶えます。<br>
            詳しくは<a href="https://jplienjang.com/">HP</a>へ。
        </p>
    </div>
    <div class="img_wrapper">
        <img src="{{ asset('img/sec2_bg2.png') }}">
    </div>
    <div class="list_wrapper">
        <ul class="sec2_list">
            <li><img src="{{ asset('img/sec2_list8.png')}}"><h3>チャン·ヨンウ院長</h3></li>
            <li><img src="{{ asset('img/sec2_list9.png')}}"><h3>キム·ジョンベ医師</h3></li>
            <li><img src="{{ asset('img/sec2_list10.png')}}"><h3>チェ・ウォンイル医師</h3></li>
            <li><img src="{{ asset('img/sec2_list11.png')}}"><h3>チェ・サンロク医師</h3></li>
            <li><img src="{{ asset('img/sec2_list12.png')}}"><h3>コ·ヒョソン医師</h3></li>
        </ul>
    </div>
</section>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection