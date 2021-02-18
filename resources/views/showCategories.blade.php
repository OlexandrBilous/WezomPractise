@extends('layouts.layout')
@section('content')

    <div class="dx-separator"></div>
    <div class="dx-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">
                <div class="col-lg-8">
                    <div class="dx-box dx-box-decorated">
                        <div class="dx-blog-post">
                            <div class="dx-blog-post-box pt-30 pb-30">
                                <h2 class="h4 mnt-5 mb-8">Статьи по категории: {{ $category->category }}</h2>



                            </div>
                            <div class="dx-separator"></div>
                            <div class="dx-blog-post-box">

                                @foreach($articles as $article)
<div class="dx-article dx-article-block">
    <h4 class="h6 dx-article-title">>{{ $article->title }}</h4>
    <div class="dx-article-text">
        <p class="mb-0">{{ $article->content }}</p>
    </div>
    <a href="{{ $article->link() }}" class="dx-btn dx-btn-link d-flex dx-article-link">Читать <span class="icon pe-7s-angle-right"></span></a>
</div>
    @endforeach
                            </div>
@endsection
