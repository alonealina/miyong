@extends('layouts.app')

@section('content')
<div class="page_title">提携ホテル</div>

<img src="{{ asset('img/hotel_main.png') }}" class="main_img" id="main_img">

<div class="hotel_main_text">Miyong Supportは8つの提携ホテルがあります</div>

<div class="hotel_div">
    <div class="hotel_name">OCLOUD HOTEL</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.ocloudhotel.com/view/index.do?SS_SVC_LANG_CODE=JPN" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/ocloud_main.png') }}" class="hotel_main_img">
    <div class="hotel_img_flex">
        <img src="{{ asset('img/ocloud1.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/ocloud1.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/ocloud1.png') }}" class="hotel_sub_img">
    </div>

    <div class="hotel_name">HOTEL THE DESIGNERS</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.designersgangnam.com/#" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/designers_main.png') }}" class="hotel_main_img">
    <div class="hotel_img_flex">
        <img src="{{ asset('img/designers1.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/designers2.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/designers3.png') }}" class="hotel_sub_img">
    </div>

    <div class="hotel_name">PREMIER BEST WESTERN.</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="https://www.airporthotel.co.kr/jp/" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/premier_main.png') }}" class="hotel_main_img">
    <div class="hotel_img_flex">
        <img src="{{ asset('img/premier1.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/premier2.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/premier3.png') }}" class="hotel_sub_img">
    </div>

    <div class="hotel_name">Aiden by BEST WESTERN</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.aidencheongdam.com/" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/aiden_main.png') }}" class="hotel_main_img">
    <div class="hotel_img_flex">
        <img src="{{ asset('img/aiden1.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/aiden2.png') }}" class="hotel_sub_img">
        <img src="{{ asset('img/aiden3.png') }}" class="hotel_sub_img">
    </div>
</div>



@endsection

@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection