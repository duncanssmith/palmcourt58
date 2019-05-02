@extends('layouts.main')

@section('content')
    <div class="" id="page-about">

        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">About us</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-3">
                @include('partials.address')
            </div>
            {{--<div class="col-lg-8 col-md-5 col-sm-4 col-xs-3">--}}
            <div class="col-lg-7 col-md-8 col-sm-8 col-xs-4">
                 @include('partials.text_4')
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                 @include('partials.text_5')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                @include('partials.opening_times')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-6 col-xs-4">
                @include('partials.googlemap')
            </div>
        </div>

    </div>
@endsection