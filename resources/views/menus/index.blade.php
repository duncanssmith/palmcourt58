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
                                <embed src="{{ $menu->path }}%toolbar=0&navpanes=0&scrollbar=1&view=fit"
                                       type="application/pdf"
                                       width="50%" height="200px"
                                />
                            </a>
                        </td>
                        <td>{{ $menu->path }}</td>
                        <td>{{ $menu->extension }}</td>
                        <td>{{ $menu->title }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>{{ $menu->active }}</td>
                        <td><a href="/menus/{{ $menu->id }}">Show</a></td>
                        <td><a href="/menus/{{ $menu->id }}/edit">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection