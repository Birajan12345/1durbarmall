<tr>
    <td>{{++$key}}</td>
    @if(!empty($shops->title))
        <td>{{ Str::limit($shops->title, 47) }}</td>
    @endif
    @if(!empty($shops->type))
        <td>{{ Str::limit($shops->type, 47) }}</td>
    @endif
    @if(!empty($shops->floor->title))
        <td>{{ Str::limit($shops->floor->title, 47) }}</td>
    @endif

    <td class="text-center">
        @if($shops->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$shops->is_published ? 'Yes' : 'No'}}</span>
        @elseif($shops->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$shops->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        @if(!empty($shops->slug))
            <a href="{{route('shop.edit', $shops->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            <button type="button" data-url="{{ route('shop.destroy', $shops->slug) }}"
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        @endif
    </td>
</tr>

