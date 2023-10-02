@extends('layouts.app')


@section('socialLink')

<section id="section_5" class="top_section_5 common">
    <div class="sec5_phone_bg">
        ご相談は <span class="sec5_span">24時間</span> いつでも受付中!!<br>
        LINEやInstagramから気軽にお問合せ
        <div class="sec5_icon_list">
            <a href="#!" class=""><img src="{{ asset('img/line.png') }}" class="sec5_icon"></a>
            <a href="#!" class=""><img src="{{ asset('img/kakao.png') }}" class="sec5_icon"></a>
            <a href="#!" class=""><img src="{{ asset('img/insta.png') }}" class="sec5_icon"></a>
            <a href="#!" class=""><img src="{{ asset('img/twitter.png') }}" class="sec5_icon"></a>
        </div>
    </div>
</section>

@endsection