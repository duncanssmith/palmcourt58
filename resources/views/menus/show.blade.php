@extends('layout')

@section('content')
    @section('banner')
    @endsection

    <h1 class="title">{{ $menu->title }}</h1>
    @if ($menu->extension == 'pdf')
        <embed src="../storage/{{$menu->path}}#page=1%toolbar=0&navpanes=0&scrollbar=1&view=fit"
            type="application/pdf"
            width="100%" height="1200px"/>
        {{-- </embed> --}}
    @else
        <img src="../storage/{{$menu->path}}" width="10%"/>
    @endif
    <div class="content">{{ $menu->path }}</div>
    <div class="content">{{ $menu->extension }}</div>
    <div class="content">{{ $menu->description }}</div>
    <div class="active">{{ $menu->active }}</div>
    <p>
        <a class="btn btn-info" href="/menus/{{ $menu->id }}/edit">Edit</a>
    </p>

@endsection
