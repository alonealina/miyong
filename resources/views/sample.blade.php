@extends('layouts.app')

@section('content')
<div class="page_title">実施例サンプル</div>

<img src="{{ asset('img/sample_main.png') }}" class="main_img" id="main_img">



<div class="clinic_div">

    <select name="clinic" class="select_clinic" style="" id="clinic">
        <option value="ドリーム整形外科">ドリーム整形外科</option>
        <option value="リエンジャン整形外科">リエンジャン整形外科</option>
    </select>

    <table class="clinic_table">
        <tbody>
            <tr>
                <th rowspan="2">全て</th>
                <td>目</td>
                <td>鼻</td>
                <td>輪郭</td>
                <td>ボディ</td>
            </tr>
            <tr>
                <td>整形注射</td>
                <td>アンチエイジング</td>
                <td>各種再手術</td>
                <td>その他</td>
            </tr>
        </tbody>
    </table>

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <div class="sample_flex">
        <img src="{{ asset('img/sample_before.png') }}" class="sample_img">
        <img src="{{ asset('img/sample_after.png') }}" class="sample_img">
    </div>

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <div class="sample_flex">
        <img src="{{ asset('img/sample_before.png') }}" class="sample_img">
        <img src="{{ asset('img/sample_after.png') }}" class="sample_img">
    </div>

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <div class="sample_flex">
        <img src="{{ asset('img/sample_before.png') }}" class="sample_img">
        <img src="{{ asset('img/sample_after.png') }}" class="sample_img">
    </div>

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <div class="sample_flex">
        <img src="{{ asset('img/sample_before.png') }}" class="sample_img">
        <img src="{{ asset('img/sample_after.png') }}" class="sample_img">
    </div>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


@endsection

@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection