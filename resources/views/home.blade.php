@extends('layouts.main')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Dashboard</h2>
                </div>

                <div class="card-body">
                    <p>You are logged in</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('nav')

                </div>
            </div>
            {{--<div class="card">--}}

                {{--<div class="card-header">Actions</div>--}}

                {{--<div class="card-body">--}}

                    {{--@include('layouts.nav')--}}
                    {{--<ul class="links">--}}
                        {{--<li><a href="/">Palm Court Pavilion public view</a></li>--}}
                        {{--<li><a href="/menus" aria-label="Menu list">Menu list <i class="icon-list"></i></a></li>--}}
                        {{--<li><a href="/menus/create" aria-label="Add a new Menu">Menu create <i class="icon-plus"></i></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

            {{--</div>--}}
        </div>
    </div>
</div>
@endsection
