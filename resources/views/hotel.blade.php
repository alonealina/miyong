@extends('layouts.app')

@section('content')

<img src="{{ asset('img/hotel_main.png') }}" class="main_img" id="main_img">

<div class="hotel img_btn"><img src="{{ asset('img/hotel_btn.png') }}"></div>

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

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



@endsection

@section('content_sp')

<img src="{{ asset('img/hotel_main_sp.png') }}" class="main_img_sp" id="main_img" style="margin-bottom:50px;">

<div class="service_flow_item">
    <img src="{{ asset('img/service7.png') }}" class="service_flow_img" style="margin-left: 14px;">
    <div class="service_flow_text">Miyong Supportは8つの<br>提携ホテルがあります</div>
</div>

<div class="hotel_div">
    <div class="hotel_name">OCLOUD HOTEL</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.ocloudhotel.com/view/index.do?SS_SVC_LANG_CODE=JPN" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/ocloud_main_sp.png') }}" class="hotel_main_img">
    <img src="{{ asset('img/ocloud1_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/ocloud1_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/ocloud1_sp.png') }}" class="hotel_sub_img">

    <div class="hotel_name">HOTEL THE DESIGNERS</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.designersgangnam.com/#" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/designers_main_sp.png') }}" class="hotel_main_img">
    <img src="{{ asset('img/designers1_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/designers2_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/designers3_sp.png') }}" class="hotel_sub_img">

    <div class="hotel_name">PREMIER BEST WESTERN.</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="https://www.airporthotel.co.kr/jp/" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/premier_main_sp.png') }}" class="hotel_main_img">
    <img src="{{ asset('img/premier1_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/premier2_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/premier3_sp.png') }}" class="hotel_sub_img">

    <div class="hotel_name">Aiden by BEST WESTERN</div>
    <div class="hotel_text">
        雲の上に浮かんでいるような気軽さ、笑みに満ちた幸福を。<br>
        オクルラッドホテルで感じてください。<br>
        詳しくは<a href="http://www.aidencheongdam.com/" target="_blank" class="hotel_a">HP</a>へ。
    </div>
    <img src="{{ asset('img/aiden_main_sp.png') }}" class="hotel_main_img">
    <img src="{{ asset('img/aiden1_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/aiden2_sp.png') }}" class="hotel_sub_img">
    <img src="{{ asset('img/aiden3_sp.png') }}" class="hotel_sub_img">
</div>

<p class="footer" style="margin-top: 50px;">Copyright（C）Beauty Support All rights reserved.</p>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection