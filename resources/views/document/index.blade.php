@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        {{--@include('nav')--}}
        <div class="col-lg-10">

            <div class="card">
                <div class="card-header">
                    <h2>Document list</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @include('document.links')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <table class="table table-hover table-light">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Active</th>
                                    <th>Hierarchy</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr>
                                        <td>{{ $document->title }}</td>
                                        <td>{!! $document->content !!}</td>
                                        <td>
                                            @if ($document->active == 1)
                                                <i class="fa fa-check text-success"></i>
                                            @else
                                                <i class="fa fa-times text-danger"></i>
                                            @endif
                                        </td>
                                        <td>{{ $document->hierarchy }}</td>
                                        <td>{{ $document->created_at }}</td>
                                        <td>{{ $document->updated_at }}</td>
                                        <td><a href="/document/{{ $document->id }}" class="btn btn-sm btn-outline-info">Show</a></td>
                                        <td><a href="/document/{{ $document->id }}/edit" class="btn btn-sm btn-outline-success">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    {{ $documents->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
