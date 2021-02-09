<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($news->title, 47) }}</td>
    <td class="text-center">{{ Carbon\Carbon::parse($news->date)->format('Y-m-d') }}</td>

    <td class="text-center">
        @if($news->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$news->is_published ? 'Yes' : 'No'}}</span>
        @elseif($news->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$news->is_published ? 'Yes' : 'No'}}</span>
        @endif    </td>
    <td class="text-right">
        <a href="{{route('news.edit', $news->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <button type="button" data-url="{{ route('news.destroy', $news->slug) }}"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>

