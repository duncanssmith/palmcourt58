@extends('layouts.main')

@section('content')

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <h1 class="title">About us</h1>


                @include('partials.address')

                @foreach($about as $abouta)
                    {!! $abouta->content !!}
                @endforeach

                <div class="opening-times">
                    <h1>Opening times</h1>
                    @foreach($opening as $op)
                        {!! $op->content !!}
                    @endforeach
                </div>

                @include('partials.googlemap')
            </div>
        </div>
@endsection