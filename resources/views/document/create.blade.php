@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        {{--@include('nav')--}}
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2>Create document</h2>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            @include('document.links')
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="/document">
                                @csrf
                                <div class="row">
                                    <div class="col-3">
                                        <label for="title" class="pull-right">Title</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="title" placeholder="title" value="{{old('title')}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="content" class="pull-right">Content</label>
                                    </div>
                                    <div class="col-9">
                                        <textarea name="content" class="ckeditor" placeholder="content" value="{{old('content')}}">
                                            {{ old('content') }}
                                        </textarea>
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
                                        <label for="hierarchy" class="pull-right">Hierarchy</label>
                                    </div>
                                    <div class="col-9">
                                        <input name="hierarchy" type="number" placeholder="hierarchy" value="{{old('hierarchy')}}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-9">
                                        <button type="submit" class="btn btn-outline-info btn-sm">Create document</button>
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
    </div>
@endsection
