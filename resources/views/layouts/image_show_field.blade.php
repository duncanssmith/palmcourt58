@if ($menu->extension === 'pdf')
    <embed src="{{ '/'.$menu->path }}"
            {{--?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit" --}}
           type="application/pdf"
           width="{{ $width }}" height="{{ $height }}" />
@else
    <img src="{{ '/'.$menu->path }}" width="100px" height="80px" />
@endif
