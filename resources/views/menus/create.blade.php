@extends('layouts.main')

@section('content')
    <div class="content">
        @include('nav')
        <div class="card">
            <div class="card-header">
                <h1 class="title">Create Menu</h1>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">

                        <form method="POST" action="/menus" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-3">
                                    <label for="image" class="pull-right">Image</label>
                                </div>
                                <div class="col-9">
                                    @include('layouts.image_upload_field')
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="path" class="pull-right">Path</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="path" placeholder="path" value="{{ old('path') }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="extension" class="pull-right">Extension</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="extension" placeholder="extension" value="{{ old('extension') }}" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="description" class="pull-right">Title</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="title" placeholder="title" value="{{old('title')}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="description" class="pull-right">Description</label>
                                </div>
                                <div class="col-9">
                                    <textarea name="description" placeholder="description" value="{{old('description')}}"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <label for="active" class="pull-right">Is active?</label>
                                </div>
                                <div class="col-9">
                                    <input type="checkbox" name="active" placeholder="active" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    &nbsp;
                                </div>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-outline-info btn-sm">Create menu</button>
                                </div>
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
                </div>
            </div>
            <div class="card-footer">&nbsp;</div>
        </div>
    </div>
@endsection
