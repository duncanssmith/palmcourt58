@extends('layouts.main')

@section('content')
    <div class="row">
        {{--@include('nav')--}}

        <div class="card">
            <div class="card-header">
                <h1 class="title">Show menu</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <label for="title" class="pull-right">Title</label>
                            </div>
                            <div class="col-9">
                                {{ $menu->title }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="image" class="pull-right">Image</label>
                            </div>
                            <div class="col-9">
                                @include('layouts.image_show_field', ['menu' => $menu, 'width' => '100%', 'height' => '1200px'])
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="extension" class="pull-right">Extension</label>
                            </div>
                            <div class="col-9">
                                @include('layouts.file_extension_badge', ['menu' => $menu])
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="description" class="pull-right">Description</label>
                            </div>
                            <div class="col-9">
                                {{ $menu->description }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="active" class="pull-right">Is active?</label>
                            </div>
                            <div class="col-9">
                                @if ($menu->active == 1)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="function" class="pull-right">Is function?</label>
                            </div>
                            <div class="col-9">
                                @if ($menu->function == 1)
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
                                {{ $menu->hierarchy }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                &nbsp;
                            </div>
                            <div class="col-9">
                                <a class="btn btn-outline-info btn-sm" href="/menus/{{ $menu->id }}/edit">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">&nbsp;</div>
        </div>
    </div>
@endsection
