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
                    <th>Path</th>
                    <th>Extension</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>
                            <a href="/menus/{{ $menu->id }}">
                                @if ($menu->extension == 'pdf')
                                    <embed src="../storage/{{ $menu->path }}?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit"
                                        type="application/pdf"
                                        width="30%" height="200px"/>
                                @else
                                    <img src="../storage/{{ $menu->path }}" width="30%"/>
                                @endif
                            </a>
                        </td>
                        <td>
                            <a href="/menus/{{ $menu->id }}">
                                {{ $menu->path }}
                            </a>
                        </td>
                        <td>{{ $menu->extension }}</td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->active }}</td>
                        <td><a href="/menus/{{ $menu->id }}" class="btn btn-sm btn-info">Show</a></td>
                        <td><a href="/menus/{{ $menu->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
