@extends('layouts.main')
@section('content')
    <div id="section-2" class="container section ">
        <div class="row ">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Menu</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-0">

                {{--<div id="menusDownloads">--}}
                    {{--<ul class="list-group">--}}
                        {{--@foreach ($menus as $menu)--}}
                            {{--<li class="list-group-item" id="menuLink-{{ $menu->id }}">--}}
                                {{--<a href="{{ $menu->path }}" target="_blank" title="Download">--}}
                                    {{--{{ $menu->title }}--}}
                                    {{--<i class="fa fa-cloud"></i>&nbsp;--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}

                <div id="carouselMenus" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($menus); $i++)
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
                        @foreach ($menus as $menu)
                            @if ($loop->first)
                                @php $isActive = 'active'
                                @endphp
                            @else
                                @php $isActive = ''
                                @endphp
                            @endif
                            <div class="carousel-item {{$isActive}}">
                                @include('layouts.image_show_field', ['menu' => $menu, 'width' => '100%', 'height' => '1200px'])
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
    </div>
@endsection