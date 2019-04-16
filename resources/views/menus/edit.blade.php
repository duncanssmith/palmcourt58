@extends('layouts.main')

@section('content')
    <div class="content">
        @include('nav')
        <div class="card">
            <div class="card-header">
                <h1 class="title">Edit Menu</h1>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="/menus/{{ $menu->id }}" enctype="multipart/form-data">
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
                                    <label for="image" class="pull-right">New image</label>
                                </div>
                                <div class="col-9">
                                    @include('layouts.image_upload_field', ['create' => 0])
                                </div>
                            </div>

                            {{--<div class="row">--}}
                                {{--<div class="col-3">--}}
                                    {{--<label for="path" class="pull-right">Path</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-9">--}}
                                    {{--<input type="text" name="path" placeholder="path" value="{{ $menu->path }}" disabled>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                                {{--<div class="col-3">--}}
                                    {{--<label for="extension" class="pull-right">Extension</label>--}}
                                {{--</div>--}}
                                {{--<div class="col-9">--}}
                                    {{--<input type="text" name="extension" placeholder="extension" value="{{ $menu->extension }}" disabled>--}}
                                {{--</div>--}}
                            {{--</div>--}}

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
                        <form method="POST" action="/menus/{{ $menu->id }}">
                            @csrf
                            @method('DELETE')

                            <div class="row">
                                <div class="col-3">&nbsp;
                                </div>
                                <div class="col-9">
                                    <button class="btn btn-sm btn-outline-danger" title="Are you sure?">Delete</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="card-footer">&nbsp;</div>
        </div>
    </div>
@endsection
