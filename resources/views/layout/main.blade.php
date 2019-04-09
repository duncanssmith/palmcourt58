<!DOCTYPE html>
<html>

    @section('head')
        @include('layout.head')
    @show

    <body>
        @section('nav')
            @include('nav')
        @show

            @yield('content')

        @section('foot')
            @include('layout.foot')
        @show

    </body>

</html>
