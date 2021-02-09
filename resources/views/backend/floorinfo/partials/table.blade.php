<tr>
    <td>{{++$key}}</td>
    @if(!empty($floorinfos->title))
        <td>{{ Str::limit($floorinfos->title, 47) }}</td>
    @endif

    <td class="text-center">
        @if($floorinfos->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$floorinfos->is_published ? 'Yes' : 'No'}}</span>
        @elseif($floorinfos->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$floorinfos->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        @if(!empty($floorinfos->slug))
            <a href="{{route('floorinfo.edit', $floorinfos->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <button type="button" data-url="{{ route('floorinfo.destroy', $floorinfos->slug) }}"
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        @endif
    </td>
</tr>

