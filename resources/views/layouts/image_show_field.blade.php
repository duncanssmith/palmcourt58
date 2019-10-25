    @if (is_object($item))
        @if ($item->extension === 'pdf')
            <embed src="{{ '/'.$item->path }}"
                    {{--?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit" --}}
                   type="application/pdf"
                   width="{{ $width }}" height="{{ $height }}" />
        @else
            <img src="{{ '/'.$item->path }}" width="{{ $width }}" height="{{ $height }}" />
        @endif
    @else
        <img src="{{ $item }}" width="{{ $width }}" height="{{ $height }}" />
    @endif

