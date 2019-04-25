@extends('layouts.main')

@section('content')
    <div class="" id="page-welcome">

        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Palm Court Pavilion </h1>
            </div>
        </div>

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
@endsection

