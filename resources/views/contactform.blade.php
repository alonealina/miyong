@extends('layouts.app')


@section('content')

<section id="section_1" class="coop_section1 coop">
    <div class="wrapper_dotbg">
        <h2 class="pinkBorder">お問い合わせ</h2>
        <div class="wrapper_dotbg_inner">
            <form name="mail_form" action="{{ route('mail_send') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="contact_div">
                <div class="contact_name">お名前</div>
                <input class="contact_text" placeholder="お名前" name="name" type="text" id="name">
            </div>
            <div class="contact_div">
                <div class="contact_name">メールアドレス</div>
                <input class="contact_text" placeholder="メールアドレス" name="mail" type="text" id="mail">
            </div>
            <div class="contact_div">
                <div class="contact_name">タイトル</div>
                <input class="contact_text" placeholder="例)サービスについて、予約について、翻訳について" name="title" type="text" id="title">
            </div>
            <div class="contact_div">
                <div class="contact_name">お問い合わせ内容</div>
                <textarea class="contact_textarea" placeholder="" name="content" id="content"></textarea>
            </div>
            <input type="hidden" name="recaptchaToken" id="recaptchaToken">
            <div class="g-recaptcha mt-3" data-sitekey="6Lc8TFonAAAAAKJqDjHHXEF-E9R-ODofyBtg6GMj" data-callback="callback_recaptcha"></div>
            <a href="#!" onclick="clickMailButton()" class="send_btn">送信</a>
            <div class="error_message" id="error_message"></div>
            </form>
        </div>
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