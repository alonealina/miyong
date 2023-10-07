@extends('layouts.app')


@section('content')

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
            詳しくは<a href="https://ja.e-dream.co.kr/01_intro/index.php?" style="color: #000;">HP</a>へ。
        </p>
    </div>
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
            詳しくは<a href="https://jplienjang.com/" style="color: #000;">HP</a>へ。
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
            <li><img src="{{ asset('img/sec2_list13.png')}}"><h3>イ・セリン医師</h3></li>
            <li><img src="{{ asset('img/sec2_list14.png')}}"><h3>キム・ヘウォン医師</h3></li>
            <!--
            <li><img src="{{ asset('img/sec2_list15.png')}}"><h3>チョウ·スンヒ医師</h3></li>
            <li><img src="{{ asset('img/sec2_list16.png')}}"><h3>イ·セヒョン医師</h3></li>
            <li><img src="{{ asset('img/sec2_list17.png')}}"><h3>ユ·スンウ医師</h3></li>
            <li><img src="{{ asset('img/sec2_list18.png')}}"><h3>ヨ·イングォン医師</h3></li>
            <li><img src="{{ asset('img/sec2_list19.png')}}"><h3>オ・ウォンジュン医師</h3></li>
            <li><img src="{{ asset('img/sec2_list20.png')}}"><h3>キム·ジェウ医師</h3></li>
            <li><img src="{{ asset('img/sec2_list21.png')}}"><h3>キム·ジェウ医師</h3></li>
            <li><img src="{{ asset('img/sec2_list22.png')}}"><h3>キム・セジン医師</h3></li>
            -->
        </ul>
    </div>
</section>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')


<section id="section_1" class="coop_section1 coop">
    <div>
        <div class="img_wrapper"><img src="{{ asset('img/cooperation_bg_sp.png')}}"></div>
        <div class="img_btn"><img src="{{ asset('img/cooperation_btn_sp.png')}}"></div>
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
    <div class="sec2_sp">
    <img src="{{ asset('img/sec2_bg_sp.png') }}" style="width: 100%;">
    <div class="sec2_list_sp">
    <div class="sec2_item"><img src="{{ asset('img/sec2_list1.png')}}" class="sec2_img"><div class="sec2_name">パクヤンス院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list4.png')}}" class="sec2_img"><div class="sec2_name">ユアンナ院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list2.png')}}" class="sec2_img"><div class="sec2_name">キムヨンジュン院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list5.png')}}" class="sec2_img"><div class="sec2_name">パクイヒョン院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list3.png')}}" class="sec2_img"><div class="sec2_name">ユウォンジェ院長</div></div>        
        <div class="sec2_item"><img src="{{ asset('img/sec2_list6.png')}}" class="sec2_img"><div class="sec2_name">チョスンウ院長</div></div>
        <div class="sec2_item_last"><img src="{{ asset('img/sec2_list7.png')}}" class="sec2_img"><div class="sec2_name">イジョエン院長</div></div>
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
    <div class="sec2_sp">
    <img src="{{ asset('img/sec2_bg2_sp.png') }}" style="width: 100%;">
    <div class="sec2_list_sp">
        <div class="sec2_item"><img src="{{ asset('img/sec2_list8.png')}}" class="sec2_img"><div class="sec2_name">チャン·ヨンウ院長</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list15.png')}}" class="sec2_img"><div class="sec2_name">チョウ·スンヒ医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list9.png')}}" class="sec2_img"><div class="sec2_name">キム·ジョンベ医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list16.png')}}" class="sec2_img"><div class="sec2_name">イ·セヒョン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list10.png')}}" class="sec2_img"><div class="sec2_name">チェ・ウォンイル医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list18.png')}}" class="sec2_img"><div class="sec2_name">ヨ·イングォン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list11.png')}}" class="sec2_img"><div class="sec2_name">チェ・サンロク医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list19.png')}}" class="sec2_img"><div class="sec2_name">オ・ウォンジュン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list12.png')}}" class="sec2_img"><div class="sec2_name">コ·ヒョソン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list20.png')}}" class="sec2_img"><div class="sec2_name">キム·ジェウ医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list13.png')}}" class="sec2_img"><div class="sec2_name">イ・セリン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list21.png')}}" class="sec2_img"><div class="sec2_name">キム·ジェウ医師</div></div>
        <div class="sec2_item "><img src="{{ asset('img/sec2_list14.png')}}" class="sec2_img"><div class="sec2_name">キム・ヘウォン医師</div></div>
        <div class="sec2_item"><img src="{{ asset('img/sec2_list22.png')}}" class="sec2_img"><div class="sec2_name">キム・セジン医師</div></div>
        <div class="sec2_item_last"><img src="{{ asset('img/sec2_list17.png')}}" class="sec2_img"><div class="sec2_name">ユ·スンウ医師</div></div>
    </div>
</section>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection