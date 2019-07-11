<!DOCTYPE html>
<html>

    @section('head')
        @include('layouts.head')
    @show

    <body>
        @section('nav')
            @include('layouts.nav')
        @show

            @yield('content')

        @section('foot')
            @include('layouts.foot')
        @show

    </body>

</html>
