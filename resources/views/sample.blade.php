@extends('layouts.app')

@section('content')

<img src="{{ asset('img/sample_main.png') }}" class="main_img" id="main_img">



<div class="clinic_div">
    <div class="clinic_table_flex">
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
                    <td class="border-top-right">ボディ</td>
                </tr>
                <tr>
                    <td>整形注射</td>
                    <td>アンチエイジング</td>
                    <td>各種再手術</td>
                    <td class="border-bottom-right">その他</td>
                </tr>
            </tbody>
        </table>
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

<img src="{{ asset('img/sample_main_sp.png') }}" class="main_img_sp" id="main_img" style="width: 100%;">


<div class="clinic_div">

    <select name="clinic" class="select_clinic" style="" id="clinic">
        <option value="ドリーム整形外科">ドリーム整形外科</option>
        <option value="リエンジャン整形外科">リエンジャン整形外科</option>
    </select>

    <table class="clinic_table">
        <tbody>
            <tr>
                <th colspan="2">全て</th>
            </tr>
            <tr>
                <td class="border_left">目</td>
                <td>鼻</td>
            </tr>
            <tr>
                <td class="border_left">輪郭</td>
                <td>ボディ</td>
            </tr>
            <tr>
                <td class="border_left">整形注射</td>
                <td>アンチエイジング</td>
            </tr>
            <tr>
                <td class="border_left_last">各種再手術</td>
                <td class="border-bottom-right">その他</td>
            </tr>
        </tbody>
    </table>

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <img src="{{ asset('img/sample_before_sp.png') }}" class="sample_img">
    <img src="{{ asset('img/sample_after_sp.png') }}" class="sample_img">

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <img src="{{ asset('img/sample_before_sp.png') }}" class="sample_img">
    <img src="{{ asset('img/sample_after_sp.png') }}" class="sample_img">

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <img src="{{ asset('img/sample_before_sp.png') }}" class="sample_img">
    <img src="{{ asset('img/sample_after_sp.png') }}" class="sample_img">

    <div class="sample_title">二重切開術：ドリーム整形外科</div>
    <img src="{{ asset('img/sample_before_sp.png') }}" class="sample_img">
    <img src="{{ asset('img/sample_after_sp.png') }}" class="sample_img">

</div>


<p class="footer" style="margin-top: 50px;">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection