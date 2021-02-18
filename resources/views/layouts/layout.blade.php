<!DOCTYPE html>

<html lang="en">
<head>
      <title>Blog</title>
      <meta name="description" content="Blog"
      @include('layouts.styles')
</head>
<body>
@include('layouts/navbar')
@include('layouts/scripts')
@yield('content')
@yield('category')
@yield('control')
</body>
</html>
