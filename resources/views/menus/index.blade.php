@extends('layout')

@section('content')
    @section('banner')

    @endsection

    <div class="content">
        <h1 class="title">Menus</h1>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>image</td>
                        <td><a href="/menus/{{ $menu->id }}">{{ $menu->title }}</a></td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->description}}</td>
                        <td><a href="/menus/{{ $menu->id }}">Show</a></td>
                        <td><a href="/menus/{{ $menu->id }}/edit">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection