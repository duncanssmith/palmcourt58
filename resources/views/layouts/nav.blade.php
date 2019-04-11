    <nav class="navbar navbar-expand-md navbar-light navbar-pc5">


        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto list-group">
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Palm Court Pavilion') }}--}}
                {{--</a>--}}
                <li class="list-group-item">
                    <a href="/" class="navbar-brand header-link">
                        Palm Court Pavilion
                        {{--<img id="nav-logo" src="/media/images/Home/logo-transparent.png" class="nav-logo" width="210" >--}}
                    </a>
                </li>
                <li class="list-group-item"><a href="/">Welcome</a></li>
                <li class="list-group-item"><a href="/menu">Menu</a></li>
                <li class="list-group-item"><a href="/views">Views</a></li>
                <li class="list-group-item"><a href="/functions">Functions</a></li>
                <li class="list-group-item"><a href="/about">About us</a></li>

{{--                    @if(Auth::user())--}}
                    {{--<li class="list-group-item"><a href="/menus">Menus</a></li>--}}
                {{--@endif--}}
            </ul>

            <ul class="navbar-nav ml-auto">
                <!-- we dont want people to log in unless they are the site owner -->
                @if(Auth::user())
                    <!-- Authentication Links -->
                        <li class="list-group-item"><a href="/menus">Menus</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                @endif
            </ul>

        </div>
        <div class="navbar-header pull-right">
            <div class="nav navbar-nav">
                <ul class="nav navbar-nav">
                    <li class="pull-right hidden-login-link">
                        <a href="login">
                            <i class="fa fa-key"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

