@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        {{--@include('nav')--}}
        <div class="col-8">

            <div class="card">
                <div class="card-header">
                    <h2>Show document</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @include('document.links')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <label for="title" class="pull-right">Title</label>
                                </div>
                                <div class="col-9">
                                    {{ $document->title }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="description" class="pull-right">Content</label>
                                </div>
                                <div class="col-9">
                                    {!! $document->content !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="description" class="pull-right">Content markup</label>
                                </div>
                                <div class="col-9">
                                    {{ $document->content }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="active" class="pull-right">Is active?</label>
                                </div>
                                <div class="col-9">
                                    @if ($document->active == 1)
                                        <i class="fa fa-check text-success"></i>
                                    @else
                                        <i class="fa fa-times text-danger"></i>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="hierarchy" class="pull-right">Hierarchy</label>
                                </div>
                                <div class="col-9">
                                    {{ $document->hierarchy }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    &nbsp;
                                </div>
                                <div class="col-9">
                                    <a class="btn btn-outline-info btn-sm" href="/document/{{ $document->id }}/edit">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">&nbsp;</div>
            </div>
        </div>
    </div>
@endsection
