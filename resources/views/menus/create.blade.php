@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            <h1 class="title">
                Menu create
            </h1>
        </div>

        <form method="POST" action="/menus">
            @csrf
            <div class="form-group">
                {{--<input type="file" name="upload" placeholder="upload an image file">--}}
                <input type="file" name="upload" class="btn btn-success" placeholder="Upload image">
                <p>Note: max file size 4MB</p>
            </div>
            <div class="form-group">
                <input type="text" name="title" placeholder="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="description" value="{{old('description')}}"></textarea>
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