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
            <li><img src="{{ asset('img/sec2_list2.png')}}"><h3>パクヤンス院長</h3></li>
            <li><img src="{{ asset('img/sec2_list3.png')}}"><h3>パクヤンス院長</h3></li>
            <li><img src="{{ asset('img/sec2_list4.png')}}"><h3>パクヤンス院長</h3></li>
            <li><img src="{{ asset('img/sec2_list5.png')}}"><h3>パクヤンス院長</h3></li>
        </ul>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection