<!DOCTYPE html>

<html lang="en">
<head>

 <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />

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
</body>
</html>
