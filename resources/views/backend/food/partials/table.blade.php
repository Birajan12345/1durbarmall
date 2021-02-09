<tr>
    <td>{{++$key}}</td>
    @if(!empty($foods->title))
        <td>{{ Str::limit($foods->title, 47) }}</td>
    @endif
    @if(!empty($foods->type))
        <td>{{ Str::limit($foods->type, 47) }}</td>
    @endif
    @if(!empty($foods->floor->title))
        <td>{{ Str::limit($foods->floor->title, 47) }}</td>
    @endif

    <td class="text-center">
        @if($foods->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$foods->is_published ? 'Yes' : 'No'}}</span>
        @elseif($foods->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$foods->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        @if(!empty($foods->slug))
            <a href="{{route('food.edit', $foods->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <button type="button" data-url="{{ route('food.destroy', $foods->slug) }}"
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        @endif
    </td>
</tr>

