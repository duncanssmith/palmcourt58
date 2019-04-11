@extends('layouts.main')
@section('content')
    {{--<li id="section-item-2" href="#section-2" class="list-group-item section photo section-link-2" data-toggle="collapse">Menus--}}
    <div id="section-2" class="container section ">
        <div class="row top-row">
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
                                    <i class="fa fa-chevron-down"></i>&nbsp;
                                </a>&nbsp;
                                <a href="{{ $menu->path }}" target="_blank" title="Download">
                                    <i class="fa fa-cloud-download"></i>&nbsp;
                                </a>
                            </li>
                            <div class="menu collapse" id="menu-{{ $menu->id }}">
                                @if ($menu->extension == 'pdf')
                                    <embed src="../storage/{{ $menu->path }}?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit"
                                        type="application/pdf"
                                        width="100%" height="600px"/>
                                @else
                                    <img src="../storage/{{ $menu->path }}" width="30%"/>
                                @endif
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection