@include('partials._head')

<body>

@include('partials.nav')

<div class="container">
    @yield('content')
    @include('partials._footer')
</div>

@include('partials._javascript')

@yield('scripts')
</body>
</html>