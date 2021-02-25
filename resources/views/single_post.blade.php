<head>
    <title>Blog</title>
    <meta name="description" content="Blog"
    @include('layouts.styles')
</head>
<body>
@include('layouts/navbar')
@include('layouts/scripts')
<div class="dx-blog-post-box">
    <h1 class="h3 dx-blog-post-title">{{$article->link()}}">{{$article->title}}</h1>
    <ul class="dx-blog-post-info">
        <li>{{$article->postdate}}</li>
        <li>Category:
            <ul class="dx-blog-post-categories">
                <li>{{$article->category->name}}</li>
            </ul>
        </li>
    </ul>
    <p class="mnb-2">{{$article->content}}</p>
</div>
</body>



