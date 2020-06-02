<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name'))</title>
    @include('layouts.partials.head')
    @yield('navbar')
    @yield('head')


</head>
<style>
    .move:hover { transform: scale(1.05); }
    .move { transition: all .2s ease-in-out; }
</style>
<body>
@include('layouts.partials.navbar')
@yield('content')
@include('layouts.partials.footer')

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script src="/lib/jquery/jquery.min.js"></script>
<script src="/lib/jquery/jquery-migrate.min.js"></script>
<script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/mobile-nav/mobile-nav.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/counterup/counterup.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/ib/lightbox/js/lightbox.min.js"></script>
<script src="/contactform/contactform.js"></script>
<script src="/js/main.js"></script>
<script src="/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select').select2();
    });
</script>
@yield('footer')

</body>

</html>
