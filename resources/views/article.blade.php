@extends('layouts.app')


@section('content')

<section id="section_1" class="news_section1 wrapper_dotbg">
    <h2 class="pinkBorder">お知らせ</h2>
    <div class="article_container">
        <div class="article">
            <h3>タイトル</h3>
            <div class="article_date">
                <p>2023/04/01</p><p>一般</p>
            </div>
            <p>texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
            </p>
            <nav>
                <a href="{{ route('news') }}">一覧へ戻る</a>
            </nav>
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