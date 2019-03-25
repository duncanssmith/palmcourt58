@extends('layout')

@section('content')

    <div class="content">
        <h1>Edit menu</h1>
        <div class="">
            Edit menu
        </div>
        <form method="POST" action="/menus/{{ $menu->id }}">

            @csrf
            @method('PATCH')


            <div>
                <input type="text" name="title" placeholder="title" value="{{ $menu->title }}">
            </div>

            <div>
                <input type="text" name="description" placeholder="description" value="{{ $menu->description }}">
            </div>

            <br/>
            <div>
                <button class="btn btn-sm btn-outline btn-info" type="submit">Update menu</button>
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
            <div>
                <button class="btn btn-sm btn-outline btn-danger">Delete</button>
            </div>
        </form>
    </div>
@endsection