@include('partials.header')

@include('partials.navbar')
@include('partials.main_navbar')

<!--content that changes -->
@yield('content')


@include('partials.footer')

@yield('bottom-script')



</body>
</html>