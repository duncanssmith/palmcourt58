@extends('layouts.main')

@section('content')

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <h1 class="title">Palm Court Pavilion </h1>

                <div class="opening-times">
                    <h2>Opening times</h2>
                    @foreach($opening as $op)
                        {!! $op->content !!}
                    @endforeach
                </div>

                    @foreach($welcome as $wc)
                        {!! $wc->content !!}
                    @endforeach

                    @include('partials.you-tube-video')

            </div>

        </div>
@endsection

