@extends('layouts.main')

@section('content')
        <div class="justify-content-center" id="page-welcome">

            <div class="row">
                <div class="col-12">
                    <h1 class="title">Palm Court Pavilion </h1>
                </div>
            </div>
            {{--<img src="{{ asset('/media/images/aMainFront-1.jpg') }}" />--}}

            <div class="row">
                <div class="col-12">
{{--                    @include('partials.text_1')--}}
                    @foreach($welcome as $wc)
                            {!! $wc->content !!}
                     @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @include('partials.you-tube-video')
                </div>
            </div>

            <div class="row">
                <div class="col-12">
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
@endsection

