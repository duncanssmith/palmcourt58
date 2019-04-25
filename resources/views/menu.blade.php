@extends('layouts.main')

@section('content')
    <div class="" id="page-menu">

        <div class="row">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Menu</h1>
            </div>
        </div>

        <div class="row">
            @if (count($menus) > 0)
                <div class="col-8">
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
                <div class="col-4">
                    <div id="menusDownloads">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3>Downloads</h3>
                            </li>
                            @foreach ($menus as $menu)
                                <li class="list-group-item" id="menuLink-{{ $menu->id }}">
                                    <a href="{{ $menu->path }}" target="_blank" title="Download">
                                        {{ $menu->title }},
                                        {{ $menu->description }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="col-12">
                <h4>No menus to display</h4>
            </div>
        @endif
        </div>
    </div>
@endsection