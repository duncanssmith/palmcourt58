@extends('layouts.main')

@section('content')

    <div class="row justify-content-center" id="page-menu">
        <div class="col-lg-10">

            <h1 class="title">Menu</h1>

            <div class="row">
                <div class="col-12">
                    <div class="opening-times">
                    @foreach($menuDocs as $menuDoc)
                        {!! $menuDoc->content !!}
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                @if (count($menus) > 0)
                    <div class="col-lg-8">

                        @include('layouts.carousel', ['elements' => $menus, 'width' => '800px', 'height' => '1100px'])

                    </div>
                    <div class="col-lg-4">
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
                @else
                    <div class="row">
                        <div class="col-12">
                            <h4>No menus</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection