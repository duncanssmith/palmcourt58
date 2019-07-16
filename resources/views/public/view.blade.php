@extends('layouts.main')

@section('content')
    <div class="row justify-content-center" id="page-views">
        <div class="col-lg-10">
            <h1 class="title">Views</h1>

            @include('layouts.carousel', ['elements' => $images, 'width' => '100%', 'height' => '100%'])

        </div>
    </div>
@endsection