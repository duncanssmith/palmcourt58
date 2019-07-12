@extends('layouts.main')

@section('content')

        <div class="row justify-content-center" id="page-welcome">

            <div class="col-lg-10">

                <h1 class="title">Palm Court Pavilion </h1>

                @if (count($banners) > 0)
                    <div class="row">
                        <div class="col-7">
                            <div class="opening-times">
                                <h2>Opening times</h2>
                                @foreach($opening as $op)
                                    {!! $op->content !!}
                                @endforeach
                                @foreach($welcome as $wc)
                                    {!! $wc->content !!}
                                @endforeach
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div id="carouselMenus" class="carousel slide carousel-container" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < count($banners); $i++)
                                        @if ($i == 0)
                                            @php $isActive = 'active'
                                            @endphp
                                        @else
                                            @php $isActive = ''
                                            @endphp
                                        @endif
                                        <li data-target="#carouselMenus" data-slide-to="{{$i}}" class="{{ $isActive }}"></li>
                                    @endfor
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($banners as $banner)
                                        @if ($loop->first)
                                            @php $isActive = 'active'
                                            @endphp
                                        @else
                                            @php $isActive = ''
                                            @endphp
                                        @endif
                                        <div class="carousel-item {{$isActive}}">
                                            @include('layouts.image_show_field', ['menu' => $banner, 'width' => '600px', 'height' => '800px'])
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselMenus" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselMenus" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="opening-times">
                            <h2>Opening times</h2>
                            @foreach($opening as $op)
                                {!! $op->content !!}
                            @endforeach
                            @foreach($welcome as $wc)
                                {!! $wc->content !!}
                            @endforeach
                            </div>
                        </div>
                    </div>
                @endif


                @include('partials.you-tube-video')

            </div>

        </div>
@endsection

