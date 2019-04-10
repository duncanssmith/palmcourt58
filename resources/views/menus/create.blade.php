@extends('layouts.main')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">Create Menu</h1>
        </div>

        <form method="POST" action="/menus" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                @include('layout.image_upload_field')
            </div>

            <div class="form-group">
                <input type="text" name="path" placeholder="path" value="{{ old('path') }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" name="extension" placeholder="extension" value="{{ old('extension') }}" disabled>
            </div>

            <div class="form-group">
                <input type="text" name="title" placeholder="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <textarea name="description" placeholder="description" value="{{old('description')}}"></textarea>
            </div>

            <div class="form-group">
                <label for="active">Is active?</label>
                <input type="checkbox" name="active" placeholder="active" value="{{ old('active') }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info">Create menu</button>
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
    </div>
@endsection