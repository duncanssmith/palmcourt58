<div class="row">
    <div class="col-12">

        <nav class="navbar navbar-expand-md navbar-light">

            <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="navbar-brand header-link">
                            <img id="nav-logo" src="/media/images/logo-transparent.png" class="nav-logo" alt="Palm Court Pavilion" >
                        </a>
                    </li>
                    <li class="nav-item"><a href="/" class="nav-link header-link">Welcome</a></li>
                    <li class="nav-item"><a href="/menu" class="nav-link header-link">Menu</a></li>
                    <li class="nav-item"><a href="/views" class="nav-link header-link">Views</a></li>
                    <li class="nav-item"><a href="/functions" class="nav-link header-link">Functions</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link header-link">About us</a></li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <!-- we dont want people to log in unless they are the site owner -->
                    {{-- @if(Auth::user()) --}}
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link header-link" href="{{ route('login') }}" title="log in"><i class="fa fa-key"></i></a>
                        </li>
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link header-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                        {{--</li>--}}
                        <!-- we dont want people to register either - its a read-only site -->
{{--                            @if (Route::has('register'))--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link header-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link header-link-secure" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" title="logout">
                                <i class="fa fa-lock"></i>
                            </a>
                            <a id="navbarDropdown" class="nav-link-secure navbar dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home" ><i class="fa fa-home"></i> Home</a>
                                <a class="dropdown-item" href="/menus" ><i class="fa fa-list"></i> List menus</a>
                                <a class="dropdown-item" href="/menus/create" ><i class="fa fa-plus"></i> Add menu</a>
                                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                    {{--onclick="event.preventDefault();--}}
                                    {{--document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>--}}
                                    {{--{{ __('Logout') }}--}}
                                {{--</a>--}}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    {{-- @endif --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
