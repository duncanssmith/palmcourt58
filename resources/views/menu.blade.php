@extends('layouts.main')
@section('content')
    <div id="section-2" class="container section ">
        <div class="row ">
            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-3">
                <h1 class="title">Menu</h1>
            </div>
        </div>
        <div class="row middle-row">
            <div class="col-md-8 col-md-offset-0">
                <div id="menus">
                    <ul class="list-group">
                        @foreach ($menus as $menu)
                            <li class="list-group-item" id="menuLink-{{ $menu->id }}" data-toggle="collapse" href="#menu-{{ $menu->id }}">
                                <a class="#menuLink{{ $menu->id }}" title="View menu" id="#menu-{{ $menu->id }}">
                                    {{ $menu->title }}
                                </a>&nbsp;
                                <a href="{{ $menu->path }}" target="_blank" title="Download">
                                    <i class="fa fa-cloud"></i>&nbsp;
                                </a>
                            </li>
                            <div class="menu collapse" id="menu-{{ $menu->id }}">
                                @include('layouts.image_show_field', ['menu' => $menu, 'width' => '100%', 'height' => '1200px'])
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection