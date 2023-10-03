@extends('layouts.app')


@section('content')

<div class=" wrapper_dotbg">

<div class="page_title">お知らせ</div>

<section id="section_1" class="news_section1">
    <div class="news_container">
        <div class="sec8_news_list">
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
            <a href="{{ route('article') }}" class="sec8_news">
                <div class="sec8_news_date">2023/04/01</div>
                <div class="sec8_news_genre">一般</div>
                <div class="sec8_news_title">textextextextextextextextextextextext</div>
            </a>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
    </div>
</section>

</div>

<p class="footer">Copyright（C）Beauty Support All rights reserved.</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>

@endsection


@section('content_sp')

<img src="{{ asset('img/miyong_main.png') }}" class="main_img_sp" id="main_img">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/index_sp.js') }}"></script>
@endsection