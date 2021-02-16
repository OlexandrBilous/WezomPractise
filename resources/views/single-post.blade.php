@extends('layouts.layout')
@section('content')



    <div class="dx-main">

<!--<div class="dx-box-1 pb-100 bg-grey-6">
    <div class="container">
        <div class="row vertical-gap md-gap">
            <div class="col-lg-8">
                <div class="dx-blog-post dx-box dx-box-decorated">
                    <div class="dx-gallery pt-10 pr-10 pl-10">
                        <a href="assets/images/blog-3.png" data-fancybox="images" class="dx-gallery-item">
                            <span class="dx-gallery-item-overlay"><span class="icon pe-7s-exapnd2"></span></span>
                            <img src="assets/images/blog-3.png" class="dx-img" alt="">
                        </a>
                    </div>
-->
                    <div class="dx-blog-post-box">
                        <h1 class="h3 dx-blog-post-title"><{{$article->title}}</h1>
                        <ul class="dx-blog-post-info">
                            <li>Date: {{$article->postdate}}</li>
                          <!--  <li>Views: 124</li> -->
                            <li>Category:
                                <ul class="dx-blog-post-categories">
                               <!--     <li><a href="#">News</a></li> -->
                                    {{ $category }}
                                </ul>
                            </li>
                            <li>Author: {{$username}}</li>
                        </ul>
                        <p class="mnb-2">{{$article->content}}</p>
                    </div>
                <div class="dx-box mt-55">
                    <h2 class="h4 mb-45">Comments:</h2>
                    @foreach($comments as $comment)
                    <div class="dx-comment">
                        <div>
                            <div class="dx-comment-img">
                                <img src="assets/images/avatar-1.png" alt="">
                            </div>
                            <div class="dx-comment-cont">
                                <a href="#" class="dx-comment-name">{{ $comment->user->name }}</a>
                                <div class="dx-comment-text">
                                    <p class="mb-0">{{ $comment->comment }}</p>
                                </div>
                                <div class="dx-comment-date">{{$comment->updated_at}}</div>
                            </div>
                        </div>
                        @endforeach

                        @auth()
                 <!--   <form action="#" class="dx-form mt-50">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input class="form-control form-control-style-3" type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control form-control-style-3" type="text" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control form-control-style-3" name="name" rows="8" cols="80" placeholder="Comment..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" name="button" class="dx-btn dx-btn-lg">Post a comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            -->
                     <form method="post" action="{{ route('comment') }}">
                         <input type="text" class="form-control mb-2" name="comment">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                         <input type="hidden" name="articles_id" value="{{ $article->id }}">
                         @if (count($errors) > 0)
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         @endif

                         <input type="submit" value="Оставить комментарий">
                     </form>
                            @endauth
            </div>
                </div>
    </div>

