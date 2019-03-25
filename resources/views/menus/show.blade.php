@extends('layout')

@section('content')
    @section('banner')
    @endsection

    <h1 class="title">{{ $menu->title }}</h1>
    <div class="content">{{ $menu->description }}</div>
    <p>
    <a class="btn btn-info" href="/menus/{{ $menu->id }}/edit">Edit</a>
    </p>

@endsection