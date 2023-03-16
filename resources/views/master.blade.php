<!doctype html>
<html lang="nl">
<head>
    @include('partials.head')
</head>

<body>
@include('partials.header')
<div id="app">
    @yield('content')
</div>
@include('partials.footer')

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
@show
</body>
</html>
