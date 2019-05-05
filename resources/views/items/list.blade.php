@foreach ($items as $item)

<tr {{(checkLowStock($item->id)) ? 'class=table-danger' : null }}>
  <td><a href="/items/{{$item->id}}/edit">ITM/{{$item->id}}</a></td>
  <td>{{$item->name}}</td>
  <td>{{$item->category->name}}</td>
  <td>{{$item->current_stock}} {{$item->unit->name}}
    @if (checkLowStock($item->id))
      <span data-toggle="tooltip" data-placement="top" title="Low stock">
        <span class="text-danger">
          <span class="fa fa-exclamation-circle"></span>
        </span>
      </span>
    @endif
  </td>
  <td>{{$item->reorder_level}} {{$item->unit->name}}</td>
  <td>
    <form class="" action="/items/{{$item->id}}/delete" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
    </form>
  </td>
</tr>

@endforeach
