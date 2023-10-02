<section id="section_9" class="top_section_9">
    <div class="sec_title">お問い合わせ</div>
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
</section>