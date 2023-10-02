@extends('layouts.app')


@section('content')
<section id="section_1" class="why_section1 common">
    <div class="floating_box_right">
        <p>
            韓国は世界の美容整形市場の25%を占める、
            <b>美容整形強国</b>です。
            世界的な美容外科学の公式 テキストの著者に
            韓国の医療チームが選ばれるほど、韓国の美容整形技術は
            国際的にマニュア ル化されています。
            中でも、骨を削らずシャープなフェイスラインを作る
            「キツネVライン形成」は、<b>世界最多の手術件数</b>を記録するほど、
            断トツの技術力を誇ります。
            他にも、手術室の 監視カメラ設置や手術室の実名制度
            (担当医師の情報を伝える)の導入など、
            患者が <b>信頼できる 医療環境</b> を整えると同時に、
            外国人患者向けのビューティークラス、
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

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection