@extends('layouts.main')

@section('content')

        <div class="row justify-content-center" id="page-welcome">

            <div class="col-lg-10">

                <h1 class="title">Palm Court Pavilion </h1>

                @if (count($banners) > 0)
                    <div class="row">
                        <div class="col-7">
                            <div class="opening-times">
                                <div class="float-text">
                                    @foreach($welcome as $wc)
                                        {!! $wc->content !!}
                                    @endforeach
                                </div>
                                <h2>Opening times</h2>
                                <div class="float-text">
                                    @foreach($opening as $op)
                                        {!! $op->content !!}
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">

                            @include('layouts.carousel', ['elements' => $banners, 'width' => '600px', 'height' => '800px'])

                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="opening-times">
                            <h2>Opening times</h2>
                                <div class="float-text">
                                    @foreach($opening as $op)
                                        {!! $op->content !!}
                                    @endforeach
                                </div>
                                <div class="float-text">
                                    @foreach($welcome as $wc)
                                        {!! $wc->content !!}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


                @include('partials.you-tube-video')

            </div>

        </div>
@endsection

