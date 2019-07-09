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
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-8 col-xs-4">
                @foreach($about as $abouta)
                    {!! $abouta->content !!}
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
{{--                @include('partials.opening_times')--}}
                <div class="opening-times">
                    <h1>Opening times</h1>
                @foreach($opening as $op)
                    {!! $op->content !!}
                @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-6 col-xs-4">
                @include('partials.googlemap')
            </div>
        </div>
    </div>
@endsection