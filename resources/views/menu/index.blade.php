@extends('layouts.main')

@section('content')
    <div class="row secure">
        {{--@include('nav')--}}
        <div class="card">
            <div class="card-header">
                <h1 class="title">Menu list</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @include('menu.links')
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Path</th>
                                <th>File type</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Active</th>
                                <th>Functions info</th>
                                <th>Hierarchy</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                                <tr>
                                    <td>
                                        <a href="/menu/{{ $menu->id }}">
                                            @include('layouts.image_show_field', ['menu' => $menu, 'width' => '100px', 'height' => '140px'])
                                        </a>
                                    </td>
                                    <td>
                                        {{ $menu->path }}
                                    </td>
                                    <td>
                                        @include('layouts.file_extension_badge', ['menu' => $menu])
                                    </td>
                                    <td>{{ $menu->title }}</td>
                                    <td>{{ $menu->description }}</td>
                                    <td>
                                        @if ($menu->active == 1)
                                            <i class="fa fa-check text-success"></i>
                                        @else
                                            <i class="fa fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($menu->function == 1)
                                            <i class="fa fa-check text-success"></i>
                                        @else
                                            <i class="fa fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>{{ $menu->hierarchy }}</td>
                                    <td>{{ $menu->created_at }}</td>
                                    <td>{{ $menu->updated_at }}</td>
                                    <td><a href="/menu/{{ $menu->id }}" class="btn btn-sm btn-outline-info">Show</a></td>
                                    <td><a href="/menu/{{ $menu->id }}/edit" class="btn btn-sm btn-outline-success">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                {{ $menus->links() }}
            </div>
        </div>
    </div>

@endsection
