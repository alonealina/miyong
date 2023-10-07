@extends('layouts.app')


@section('content')

<section id="section_1" class="why_section1 common">
    <div>
        <p>
            韓国は世界の美容整形市場の25%を占める、<br>
            <span>美容整形強国</span>です。<br>
            世界的な美容外科学の公式 テキストの著者に<br>
            韓国の医療チームが選ばれるほど、韓国の美容整形技術は<br>
            国際的にマニュア ル化されています。<br>
            中でも、骨を削らずシャープなフェイスラインを作る<br>
            「キツネVライン形成」は、<span>世界最多の手術件数</span>を記録するほど、<br>
            断トツの技術力を誇ります。<br>
            他にも、手術室の 監視カメラ設置や手術室の実名制度<br>
            (担当医師の情報を伝える)の導入など、<br>
            患者が <span>信頼できる 医療環境</span> を整えると同時に、<br>
            外国人患者向けのビューティークラス、<br>
            文化プログラムなど差別化されたサービスを提供しています。
        </p>
    </div>
</section>

@include('item.social_link')

@include('item.contact')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<section id="section_1" class="why_section1">
    <div>
        <p>
            韓国は世界の美容整形市場の25%を占める、<br>
            <span>美容整形強国</span>です。<br>
            世界的な美容外科学の公式 テキストの著者に<br>
            韓国の医療チームが選ばれるほど、韓国の美容整形技術は<br>
            国際的にマニュア ル化されています。<br>
            中でも、骨を削らずシャープなフェイスラインを作る<br>
            「キツネVライン形成」は、<span>世界最多の手術件数</span><br>
            を記録するほど、断トツの技術力を誇ります。<br>
            他にも、手術室の 監視カメラ設置や手術室の実名制度<br>
            (担当医師の情報を伝える)の導入など、<br>
            患者が <span>信頼できる 医療環境</span> を整えると同時に、<br>
            外国人患者向けのビューティークラス、<br>
            文化プログラムなど差別化されたサービスを提供しています。
        </p>
    </div>
</section>

<div class="sociallink">

<section id="section_5" class="top_section_5">
    ご相談は <span class="sec5_span">24時間</span> いつでも受付中!!<br>
    LINEやInstagramから気軽にお問合せ
    <div class="sec5_icon_list">
        <a href="#!" style=""><img src="{{ asset('img/line.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/kakao.png') }}" class="sec5_icon"></a>
        <a href="#!" style=""><img src="{{ asset('img/insta.png') }}" class="sec5_icon"></a>
        <a href="#!" style="padding-top: 12vw;"><img src="{{ asset('img/twitter.png') }}" class="sec5_icon"></a>
    </div>
</section>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection