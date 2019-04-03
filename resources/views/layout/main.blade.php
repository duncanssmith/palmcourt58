<!DOCTYPE html>
<html>

    @section('head')
        @include('layout.head')
    @show

    <body>
        @section('nav')
            @include('nav')
        @show

        <div class="container">

            @yield('content')

        </div>

        @section('foot')
            @include('layout.foot')
        @show

    </body>

</html>
