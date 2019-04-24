@extends('layouts.main')

@section('content')
    {{--<li id="section-item-3" href="#section-3" class="list-group-item section photo section-link-3" data-toggle="collapse">Views--}}
    <div class="" id="page-view">
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Views</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <div id="carouselViews" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($images); $i++)
                            @if ($i == 0)
                                @php $isActive = 'active'
                                @endphp
                            @else
                                @php $isActive = ''
                                @endphp
                            @endif
                            <li data-target="#carouselViews" data-slide-to="{{$i}}" class="{{ $isActive }}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($images as $image)
                            @if ($loop->first)
                                @php $isActive = 'active'
                                @endphp
                            @else
                                @php $isActive = ''
                                @endphp
                            @endif
                            <div class="carousel-item {{$isActive}}">
                                <img src="{{  $image }}" width="100%" height="100%" />
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselViews" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselViews" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection