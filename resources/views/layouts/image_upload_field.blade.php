@switch ($create)
    @case(1)
        <input type="file" name="menuImage" class="btn btn-sm btn-outline-success" placeholder="Upload menu image" title="Note: max file size 4MB">
        @break
    @case(0)
        <input type="file" name="menuImage" class="btn btn-sm btn-outline-warning" placeholder="Upload a new menu image" title="Note: max file size 4MB">
        @break
    @default
        <input type="file" name="menuImage" class="btn btn-sm btn-outline-default" placeholder="Upload a new menu image" title="Note: max file size 4MB">
        @break
@endswitch




