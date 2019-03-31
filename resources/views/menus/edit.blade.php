@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">
                Edit Menu
            </h1>
        </div>

        <form method="POST" action="/menus/{{ $menu->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <input type="checkbox" name="active" placeholder="active" value="true">
            </div>

            <div class="form-group">
                @include('layout.image_upload_field')
            </div>

            <div class="form-group">
                <input type="text" name="path" placeholder="path" value="{{ $menu->path }}">
            </div>

            <div class="form-group">
                <input type="text" name="extension" placeholder="extension" value="{{ $menu->extension }}">
            </div>

            <div class="form-group">
                <input type="text" name="title" placeholder="title" value="{{ $menu->title }}">
            </div>

            <div class="form-group">
                <textarea name="description" placeholder="description" value="{{ $menu->description }}"></textarea>
            </div>
            <br/>
            <div class="form-group">
                <button class="btn btn-sm btn-primary" type="submit">Update menu</button>
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

        <form method="POST" action="/menus/{{ $menu->id }}">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <button class="btn btn-sm btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection