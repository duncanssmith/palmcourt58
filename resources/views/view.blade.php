@extends('layouts.main')
@section('content')
    {{--<li id="section-item-3" href="#section-3" class="list-group-item section photo section-link-3" data-toggle="collapse">Views--}}
    <div id="section-3" class="container section ">
        <div class="row top-row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Views</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                {{--<div class="fotorama" data-nav="thumbs">--}}
                @foreach ($carouselImages as $image)
                    <img src="/media/images/{{ $image }}" width="40px" />
                @endforeach
                {{--</div>--}}

            </div>
        </div>
    </div>
@endsection