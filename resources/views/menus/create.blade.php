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

            <div>
                <input type="text" name="title" placeholder="title" value="{{old('title')}}">
            </div>

            <div>
                <input type="text" name="description" placeholder="description" value="{{old('description')}}">
            </div>

            <div>
                <button type="submit">Create menu</button>
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