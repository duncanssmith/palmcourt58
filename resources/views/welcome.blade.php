@extends('layouts.main')

@section('content')
    <div class="">
        <div class="row justify-content-center" id="page-welcome">
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                    <h1 class="title">Palm Court Pavilion </h1>
                </div>
            </div>
            {{--<img src="{{ asset('/media/images/aMainFront-1.jpg') }}" />--}}

            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
{{--                    @include('partials.text_1')--}}
                    <p class="float-text-main">
                    @foreach($welcome as $wc)
                            {!! $wc->content !!}
                     @endforeach
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-6 col-sm-4 col-xs-2">
                    @include('partials.you-tube-video')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
{{--                    @include('partials.opening_times')--}}
                    <div class="opening-times">
                        <h1>Opening times</h1>
                        <p class="float-text">
                    @foreach($opening as $op)
                        {!! $op->content !!}
                    @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

