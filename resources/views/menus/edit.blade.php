@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">
                Edit Menu
            </h1>
        </div>

        @include('nav')

        <form method="POST" action="/menus/{{ $menu->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            @if ($menu->extension == 'pdf')
                <embed src="../storage/{{ $menu->path }}?page=1&toolbar=0&navpanes=0&scrollbar=1&view=fit"
                    type="application/pdf"
                    width="40%" height="400px"/>
            @else
                <img src="../storage/{{ $menu->path }}" width="10%"/>
            @endif

            <div class="form-group">
                <label for="active">Is active?</label>
                <input type="checkbox" name="active" placeholder="active" {{ old('active') }} >
            </div>

            <div class="form-group">
                <label for="image">Menu Image</label>
                @include('layouts.image_upload_field')
            </div>

            <div class="form-group">
                <label for="path">Path</label>
                <input type="text" name="path" placeholder="path" value="{{ $menu->path }}">
            </div>

            <div class="form-group">
                <label for="extension">Extension</label>
                <input type="text" name="extension" placeholder="extension" value="{{ $menu->extension }}">
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="title" value="{{ $menu->title }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
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
