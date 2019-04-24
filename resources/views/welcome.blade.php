@extends('layouts.main')

@section('content')
    {{--<body data-spy="scroll" data-target="#pcp-navbar" data-offset="90">--}}
        <div class="" id="page-welcome">
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                    <h1 class="title">Palm Court Pavilion </h1>
                </div>
            </div>

    {{--<ul class="list-group">--}}
        {{--<li id="section-item-1" href="#section-1" class="list-group-item section photo " data-toggle="collapse">Palm Court Pavilion</li>--}}
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                    @include('partials.text_1')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-6 col-sm-4 col-xs-2">
                    {{--@include('partials.you-tube-video')--}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                    @include('partials.opening_times')
                </div>
            </div>
        </div>
    {{--</body>--}}
@endsection

