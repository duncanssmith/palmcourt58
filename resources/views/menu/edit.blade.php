@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        {{--@include('nav')--}}
        <div class="col-8">

            <div class="card">
                <div class="card-header">
                    <h2>Edit Menu</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @include('menu.links')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/menu/{{ $menu->id }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-3">
                                        <label for="image" class="pull-right">Image</label>
                                    </div>
                                    <div class="col-9">
                                        @include('layouts.image_show_field', ['menu' => $menu, 'width' => '40%', 'height' => '400px'])
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="active" class="pull-right">Is active?</label>
                                    </div>
                                    <div class="col-9">
                                        @if ($menu->active)
                                            <input type="checkbox" name="active" placeholder="active" checked>
                                        @else
                                            <input type="checkbox" name="active" placeholder="active">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="function" class="pull-right">Is functions?</label>
                                    </div>
                                    <div class="col-9">
                                        @if ($menu->function)
                                            <input type="checkbox" name="function" placeholder="active" checked>
                                        @else
                                            <input type="checkbox" name="function" placeholder="active">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="image" class="pull-right">New image</label>
                                    </div>
                                    <div class="col-9">
                                        @include('layouts.image_upload_field', ['create' => 0])
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="title" class="pull-right">Title</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="title" placeholder="title" value="{{ $menu->title }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="description" class="pull-right">Description</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="description" placeholder="description" value="{{ $menu->description }}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="hierarchy" class="pull-right">Hierarchy</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="number" name="hierarchy" placeholder="hierarchy" value="{{ $menu->hierarchy }}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">&nbsp;
                                    </div>
                                    <div class="col-9">
                                        <button class="btn btn-sm btn-outline-info" type="submit">Update menu</button>
                                    </div>
                                </div>

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </form>

                            <hr>

                            <div class="row">
                                <div class="col-3">&nbsp;</div>
                                <div class="col-9">
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteConfirm" aria-hidden="true">Delete</button>
                                    {{--<button class="btn btn-sm btn-outline-danger" title="Are you sure?">Delete</button>--}}
                                </div>
                            </div>

                            <div class="modal fade" id="deleteConfirm">
                                <div class="modal-dialog" id="">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h3>Are you sure you want to delete {{ $menu->title }}?</h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="/menu/{{ $menu->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
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
