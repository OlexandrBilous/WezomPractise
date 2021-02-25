<div class="card mb-2">
    <div class="card-body">
        <h5 class="h3 dx-blog-post-title"><a href="{{$article->link()}}">{{$article->title}}</a></h5>
        <ul class="dx-blog-post-info">
            <li>{{$article->postdate}}</li>
            Категория:

                    <li>{{$article->category->name}}</li>
            <!--
            <li>Автор:$user->name}}</li> -->
        </ul>
        <p class="mnb-2">{{$article->content}}</p>
    </div>

        <a href="{{route('article-change', $article)}}" class="btn btn-primary">Редактировать</a>
        <a href="{{route('article-delete', $article)}}" class="btn btn-danger">Удалить</a>


    </div>

