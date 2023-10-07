@extends('layouts.app')

@section('content')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img" id="main_img">

<div class="service_flow_btn"><img src="{{ asset('img/serviceflow_btn.png')}}"></div>

<div class="service_flow_main">
    <img src="{{ asset('img/service_flow_graph.png') }}" class="service_flow_graph">
    <div class="service_flow_content">
        <div class="service_flow_title">お問合せ</div>
        <img src="{{ asset('img/service_flow_sns.png') }}" class="service_flow_sns">
        <div class="service_flow_ex1">1.各種SNSまたはメールよりご希望内容をご相談ください</div>
        <div class="service_flow_ex2" style="margin-bottom: 4vw;">
            お客様のご希望に合わせて、Miyong Supportから<br>
            専属コンサルタントを選定させていただきます。<br>
            ご質問等もお気軽にお問い合わせください。
        </div>


        <div class="service_flow_title">ご希望内容の確認</div>
        <img src="{{ asset('img/service_flow4.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">2.お客様のご希望内容の確認と追加ヒアリング</div>
        <div class="service_flow_ex2" style="margin-bottom: 6vw;">
            専属コンサルタントが希望内容に合わせてプランをご提案。<br>
            遠慮なくご希望内容をお話しください！
        </div>

        <div class="service_flow_title">病院やホテル等の選択・提案<br>＋<br>１次見積りの提案</div>
        <img src="{{ asset('img/service_flow5.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">3.韓国での病院やホテル等の選択・提案 ＋ 第１次お見積りの提案</div>
        <div class="service_flow_ex2" style="margin-bottom: 6vw;">
            お客様のご希望内容からクリニックや宿泊ホテルをご提案。<br>
            お気に入りの場所をお選びください！<br>
            大まかなプランが決まり次第、お見積もりをご提案させていただきます。
        </div>

        <div class="service_flow_title">病院とのオンライン相談・診断</div>
        <img src="{{ asset('img/service_flow6.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">4.ご希望の病院とのオンライン相談・診断</div>
        <div class="service_flow_ex2" style="margin-bottom: 6vw;">
            現地の医師とオンラインでの相談ができ、専門的な診断が受けられます。<br>
            オンライン相談には専門の翻訳家が同席いたしますので、<br>
            韓国語がわからない方でもご安心ください！
        </div>

        <div class="service_flow_title">送迎等のご提案<br>＋<br>２次見積りの提案</div>
        <img src="{{ asset('img/service_flow7.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">5.送迎方法等のご提案と選択 ＋ 第2次お見積りの提案</div>
        <div class="service_flow_ex2" style="margin-bottom: 6vw;">
            1~4までの流れを踏まえ、お客様に合った送迎プランをご提案。<br>
            お客様のご要望も是非お聞かせください。<br>
            第1次お見積もりにプラン内容をあわせて、適正な第2次お見積もりの<br>
            ご提案をさせていただきます。<br>
            納得のプランが見つかるまで何度でもご相談いただけます！
        </div>

        <div class="service_flow_title">日程の決定と<br>プランの決定</div>
        <img src="{{ asset('img/service_flow8.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">6.日程の決定とプランの決定</div>
        <div class="service_flow_ex2" style="margin-bottom: 6vw;">
            お気に入りのプランが見つかったら<br>
            日程と当日のプランを決定してご契約に移ります。
        </div>

        <div class="service_flow_title">契約<br>費用のお振り込み</div>
        <img src="{{ asset('img/service_flow9.png') }}" class="service_flow_content_img">
        <div class="service_flow_ex1">7.ご契約 + 費用のお振り込み</div>
        <div class="service_flow_ex2">
            契約内容と注意事項に同意いただけましたらご契約成立となります。<br>
            期日内にお振込みをお願いいたします。<br>
            (期日内にお振込みいただけない場合自動キャンセルとなります)
        </div>
    </div>
</div>

<div class="service_humans">
    <a href="#!" class="plan_a">プランの開始</a>
    理想の自分になるための旅が始まります<br>
    韓国で生まれ変わった貴女に出会いましょう！
</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/service_flow_main_sp.png') }}" class="main_img_sp" id="main_img" style="margin-bottom:50px;">

<div class="service_flow_item">
    <img src="{{ asset('img/service_flow1.png') }}" class="service_flow_img">
    <div class="service_flow_text">空港からホテル・病院までの<br>送迎完備</div>
</div>

<div class="service_flow_item">
    <img src="{{ asset('img/service_flow2.png') }}" class="service_flow_img">
    <div class="service_flow_text">病院での翻訳<br>及び通訳、付き添い</div>
</div>

<div class="service_flow_item">
    <img src="{{ asset('img/service_flow3.png') }}" class="service_flow_img" style="margin-left: 14px;">
    <div class="service_flow_text">その他韓国滞在中は<br>完全サポート(日本語対応)</div>
</div>

<div class="service_flow_title">お問合せ</div>
<img src="{{ asset('img/service_flow_sns_sp.png') }}" class="service_flow_sns">
<div class="service_flow_ex1">1.各種SNSまたはメールよりご希望内容を<br>ご相談ください</div>
<div class="service_flow_ex2">
    お客様のご希望に合わせて、Miyong Supportから<br>
    専属コンサルタントを選定させていただきます。<br>
    ご質問等もお気軽にお問い合わせください。
</div>


<div class="service_flow_title">ご希望内容の確認</div>
<img src="{{ asset('img/service_flow4.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">2.お客様のご希望内容の確認と追加ヒアリング</div>
<div class="service_flow_ex2">
    専属コンサルタントが希望内容に合わせてプランをご提案。<br>
    遠慮なくご希望内容をお話しください！
</div>

<div class="service_flow_title">病院やホテル等の選択・提案<br>＋<br>第１次見積りの提案</div>
<img src="{{ asset('img/service_flow5.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">3.韓国での病院やホテル等の選択・提案<br>＋ 第１次お見積りの提案</div>
<div class="service_flow_ex2">
    お客様のご希望内容からクリニックや宿泊ホテルをご提案。<br>
    お気に入りの場所をお選びください！<br>
    大まかなプランが決まり次第、<br>
    お見積もりをご提案させていただきます。
</div>

<div class="service_flow_title">病院とのオンライン相談・診断</div>
<img src="{{ asset('img/service_flow6.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">4.ご希望の病院とのオンライン相談・診断</div>
<div class="service_flow_ex2">
    現地の医師とオンラインでの相談ができ、<br>
    専門的な診断が受けられます。<br>
    オンライン相談には専門の翻訳家が同席いたしますので、<br>
    韓国語がわからない方でもご安心ください！
</div>

<div class="service_flow_title">送迎等のご提案<br>＋<br>第２次見積りの提案</div>
<img src="{{ asset('img/service_flow7.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">5.送迎方法等のご提案と選択<br>＋ 第２次お見積りの提案</div>
<div class="service_flow_ex2">
    1~4までの流れを踏まえ、<br>
    お客様に合った送迎プランをご提案。<br>
    お客様のご要望も是非お聞かせください。<br>
    第1次お見積もりにプラン内容をあわせて、適正な<br>
    第2次お見積もりのご提案をさせていただきます。<br>
    納得のプランが見つかるまで何度でもご相談いただけます！
</div>

<div class="service_flow_title">日程の決定とプランの決定</div>
<img src="{{ asset('img/service_flow8.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">6.日程の決定とプランの決定</div>
<div class="service_flow_ex2">
    お気に入りのプランが見つかったら<br>
    日程と当日のプランを決定してご契約に移ります。
</div>

<div class="service_flow_title">契約<br>費用のお振り込み</div>
<img src="{{ asset('img/service_flow9.png') }}" class="service_flow_content_img">
<div class="service_flow_ex1">7.ご契約 + 費用のお振り込み</div>
<div class="service_flow_ex2">
    契約内容と注意事項に同意いただけましたら<br>
    ご契約成立となります。<br>
    期日内にお振込みをお願いいたします。<br>
    (期日内にお振込みいただけない場合<br>
    自動キャンセルとなります)
</div>

<div class="service_humans">
    <a href="#!" class="service_a">プランの開始</a>
    理想の自分になるための旅が<br>始まります<br>
    韓国で生まれ変わった貴女に<br>出会いましょう！
</div>

<section id="section_5" class="top_section_5" style="margin-top: -3px;">
    ご相談は <span class="sec5_span">24時間</span> いつでも受付中!!<br>
    LINEやInstagramから気軽にお問合せ
    <div class="sec5_icon_list">
        <a href="#!" style=""><img src="{{ asset('img/line.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/kakao.png') }}" class="sec5_icon"></a>
        <a href="#!" style=""><img src="{{ asset('img/insta.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/twitter.png') }}" class="sec5_icon"></a>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection