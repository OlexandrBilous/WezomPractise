<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Пример на bootstrap 5: Блог - двухколоночный макет блога с пользовательской навигацией, заголовком и содержанием.">

    <title>Блог | Blog Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
</head>
<body>

<div class="row">
    <div class="col-md-8">


        <article class="blog-post">
            <div class="container text-center">
            <h2 class="blog-post-title"><a href="{{$article->link()}}">{{$article->title}}</a></h2>
            <p class="blog-post-meta"> Дата публикации:  {{ \Carbon\Carbon::parse($article->postdate)->format('d/m/Y')}} </p>
            <p class="blog-post-meta">  Просмотры:{{$article->view_count}} </p>
            <p class="blog-post-meta">  Категория:{{$article->category->name}}</p>
            <p>{{$article->content}} </p>
            <hr>
            <a href="{{route('article-moderate', $article)}}" class="btn btn-primary">Редактировать</a>
            <a href="{{route('article-delete', $article)}}" class="btn btn-danger">Удалить</a>
            <!-- /.blog-post -->

            <!--   Пагинация      <nav class="blog-pagination" aria-label="Pagination">
                         <a class="btn btn-outline-primary" href="#">Older</a>
                         <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                     </nav>

                 </div> -->
        </article>
    </div>
</div>
</body>
</html>



