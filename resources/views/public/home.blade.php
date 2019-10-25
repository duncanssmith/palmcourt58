@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h2>Dashboard</h2>
                </div>

                <div class="card-body">
                    <p>You are logged in</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('public.nav')

                </div>
            </div>
        </div>
    </div>
@endsection
