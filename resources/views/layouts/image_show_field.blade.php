<br/>
{{--<img src="{{ app_path($menu->path) }}" title="{{ app_path($menu->path) }}" />--}}
{{--<img src="{{ base_path($menu->path) }}" title="{{ base_path($menu->path) }}" />--}}
{{--<img src="{{ public_path($menu->path) }}" title="{{ public_path($menu->path) }}" />--}}
{{--<img src="{{ database_path($menu->path) }}" title="{{ database_path($menu->path) }}" />--}}
{{--<img src="{{ config_path($menu->path) }}" title="{{ config_path($menu->path) }}" />--}}
{{--<img src="{{ resource_path($menu->path) }}" title="{{ resource_path($menu->path) }}" />--}}
{{--<img src="{{ storage_path($menu->path) }}" title="{{ storage_path($menu->path) }}" />--}}
<br/>
<img src="{{ storage_path('app/public/'.$menu->path) }}" title="" />
<img src="{{ public_path('storage/'.$menu->path) }}" title="" />


{{--@if ($menu->extension == 'pdf')--}}
    {{--<embed src="{{ $menu::IMAGE_PATH.'/'.$menu->path }}"--}}
            {{--?page=1&toolbar=0&navpanes=0@scrollbar=0&view=fit" --}}
           {{--type="application/pdf"--}}
{{--           width="{{ $width }}" height="{{ $height }}" />--}}
{{--@else--}}
    {{--<img src="{{ $menu::IMAGE_PATH.'/'.$menu->path }}" width="100px" height="80px" />--}}
{{--@endif--}}
