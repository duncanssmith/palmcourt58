<div
    @switch ($item->extension)
        @case ('pdf')
        class="badge badge-danger"
        @break
        @case ('png')
        class="badge badge-info"
        @break
        @case ('JPG')
        class="badge badge-success"
        @break
        @case ('jpeg')
        class="badge badge-success"
        @break
        @case ('jpg')
        class="badge badge-success"
        @break
        @default
        class="badge badge-default"
        @break
    @endswitch
>
    {{ $item->extension }}
</div>
