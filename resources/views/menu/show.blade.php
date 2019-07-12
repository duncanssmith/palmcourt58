@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        {{--@include('nav')--}}
        <div class="col-lg-8">

            <div class="card">
                <div class="card-header">
                    <h2>Show menu</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="row">
                            <div class="col-12">
                                @include('menu.links')
                            </div>
                        </div>
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
                                    <label for="active" class="pull-right">Active?</label>
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
                                    <label for="function" class="pull-right">Function?</label>
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
                                    <label for="banner" class="pull-right">Banner?</label>
                                </div>
                                <div class="col-9">
                                    @if ($menu->banner == 1)
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
                                    <a class="btn btn-outline-info btn-sm" href="/menu/{{ $menu->id }}/edit">Edit</a>
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
