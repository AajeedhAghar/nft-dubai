@include('layouts.head')
<style>

</style>
<body>
<div class="loader"></div>



@include('layouts.header')

<!-- Main Container  -->
@yield('body')

<!-- //Main Container -->

    @include('layouts.footer')


@include('layouts.footerJs')

</body>

</html>
