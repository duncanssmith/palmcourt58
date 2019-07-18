@extends('layouts.main')

@section('content')
    <div class="row justify-content-center" id="page-functions">

        <div class="col-lg-10">

            <h1 class="title">Functions</h1>

                <div class="float-text">
                    @foreach($documents as $doc)
                        {!! $doc->content !!}
                    @endforeach
                </div>

                @if (count($functions) > 0)
                    <div class="row">
                        <div class="col-lg-8">

                            @include('layouts.carousel', ['elements' => $functions, 'width' => '800px', 'height' => '1100px'])

                        </div>
                        <div class="col-lg-4">
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
                    </div>

                @else
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>No functions information</h4>
                        </div>
                    </div>
                @endif
        </div>
    </div>
@endsection