@extends('layouts.app')


@section('content')

<div class=" wrapper_dotbg">

<div class="page_title">お知らせ</div>

<section id="section_1" class="news_section1">
    <div class="article_container">
        <div class="article">
            <h3>タイトル</h3>
            <div class="article_date">
                <p>2023/04/01</p><p>一般</p>
            </div>
            <p>texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
            </p>
            <nav>
                <a href="{{ route('news') }}" class="pink_btn">一覧へ戻る</a>
            </nav>
        </div>
    </div>
</section>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<div class=" wrapper_dotbg">

<div class="page_title_sp">お知らせ</div>

<section id="section_1" class="news_section1">
    <div class="article_container">
        <div class="article">
            <h3>タイトル</h3>
            <div class="article_date">
                <p>2023/04/01</p><p>一般</p>
            </div>
            <p>texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
               texttexttexttexttexttexttexttexttexttext
            </p>
            <nav>
                <a href="{{ route('news') }}" class="pink_btn">一覧へ戻る</a>
            </nav>
        </div>
    </div>
</section>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection