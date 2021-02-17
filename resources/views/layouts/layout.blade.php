<!DOCTYPE html>

<html lang="en">
<head>
      <title>Blog</title>
      <meta name="description" content="Blog"
      @include('layouts.styles')
</head>
<body>
@include('layouts/navbar')
@include('layouts/header')
@include('layouts/breadcrumbs')
@yield("content")
@include('layouts/footer')
@include('layouts/scripts')
@yield('content')
@yield('category')
@yield('control')
</body>
</html>
