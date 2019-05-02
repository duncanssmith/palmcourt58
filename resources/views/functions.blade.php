@extends('layouts.main')

@section('content')
    <div class="" id="page-functions">

        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Functions</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                @include('partials.text_2')
            </div>
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                @include('partials.text_3')
            </div>
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h3>Please call us on 01903 212 011 for a quote</h3>
            </div>
        </div>

        <div class="row">
            @if (count($functions) > 0)
                <div class="col-8">
                    <div id="carouselMenus" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @for ($i = 0; $i < count($functions); $i++)
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
                            @foreach ($functions as $function)
                                @if ($loop->first)
                                    @php $isActive = 'active'
                                    @endphp
                                @else
                                    @php $isActive = ''
                                    @endphp
                                @endif
                                <div class="carousel-item {{$isActive}}">
                                    @include('layouts.image_show_field', ['menu' => $function, 'width' => '100%', 'height' => '1200px'])
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
                <div class="col-4">
                    <div id="menusDownloads">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3>Downloads</h3>
                            </li>
                            @foreach ($functions as $function)
                                <li class="list-group-item" id="menuLink-{{ $function->id }}">
                                    <a href="{{ $function->path }}" target="_blank" title="Download">
                                        {{ $function->title }},
                                        {{ $function->description }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <h4>No menus to display</h4>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection