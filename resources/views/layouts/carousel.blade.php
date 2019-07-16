<div id="carouselElements" class="carousel slide carousel-container" data-ride="carousel">
    <ol class="carousel-indicators">
        @for ($i = 0; $i < count($elements); $i++)
            @if ($i == 0)
                @php $isActive = 'active'
                @endphp
            @else
                @php $isActive = ''
                @endphp
            @endif
            <li data-target="#carouselElements" data-slide-to="{{$i}}" class="{{ $isActive }}"></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        @foreach ($elements as $element)
            @if ($loop->first)
                @php $isActive = 'active'
                @endphp
            @else
                @php $isActive = ''
                @endphp
            @endif
            <div class="carousel-item {{$isActive}}">
                @include('layouts.image_show_field', ['item' => $element, 'width' => $width, 'height' => $height])
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselElements" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselElements" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
