<div
    @switch ($menu->extension)
        @case ('pdf')
        class="badge badge-danger"
        @break
        @case ('png')
        class="badge badge-info"
        @break
        @case ('jpg')
        class="badge badge-success"
        @break
        @default
        class="badge badge-default"
        @break
    @endswitch
>
    {{ $menu->extension }}
</div>
