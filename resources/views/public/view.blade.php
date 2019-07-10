@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h1 class="title">Views</h1>

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
@endsection