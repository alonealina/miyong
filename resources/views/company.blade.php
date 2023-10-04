@extends('layouts.app')


@section('content')

<div class=" wrapper_dotbg">

<div class="page_title">運営会社</div>

<section id="section_1" class="coop_section1 coop floating_box">
    <div class="wrapper_dotbg_inner">
        <h3>運営会社名</h3>
        <p>株式会社Ace＆Co.</p>
        <h3>代表取締役</h3>
        <p>酒向 智也</p>
        <h3>メールアドレス</h3>
        <p>info@ace-co.press</p>
        <h3>設立</h3>
        <p>2023/01/01</p>
        <h3>受付時間</h3>
        <p>月曜日～金曜日/10:00~18:00</p>
    </div>
    <div class="wrapper_dotbg_inner">
        <h3>住所</h3>
        <p>〒542-0077<br>大阪府大阪市中央区道頓堀1丁目東3-20<br>EMPORIUM BLDG 3F</p>
        <h3>電話番号</h3>
        <p>06-6484-3861</p>
        <h3>資本金</h3>
        <p>10,000,000円</p>
    </div>
</section>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<div class=" wrapper_dotbg">

<div class="page_title_sp">運営会社</div>

<div class="company_wrapper">

<section id="section_1" class="coop_section1 coop floating_box">
    <div class="wrapper_dotbg_inner">
        <h3>運営会社名</h3>
        <p>株式会社Ace＆Co.</p>
        <h3>住所</h3>
        <p>〒542-0077<br>大阪府大阪市中央区道頓堀1丁目東3-20<br>EMPORIUM BLDG 3F</p>
        <h3>代表取締役</h3>
        <p>酒向 智也</p>
    </div>
</section>

<section id="section_1" class="coop_section1 coop_sp floating_box">
    <div class="wrapper_dotbg_inner">
        <h3>メールアドレス</h3>
        <p>info@ace-co.press</p>
        <h3>設立</h3>
        <p>2023/01/01</p>
        <h3>受付時間</h3>
        <p>月曜日～金曜日/10:00~18:00</p>
    </div>
    <div class="wrapper_dotbg_inner">
        <h3>電話番号</h3>
        <p>06-6484-3861</p>
        <h3>資本金</h3>
        <p>10,000,000円</p>
    </div>
</section>

</div>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection