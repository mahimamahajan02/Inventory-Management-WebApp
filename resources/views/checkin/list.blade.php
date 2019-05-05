@foreach ($checkin as $checkin)

<tr>
  <td><a href="/checkin/{{$checkin->id}}/edit">CHKIN/{{$checkin->id}}</a></td>
  <td>{{$checkin->item->name}}</td>
  <td>{{$checkin->quantity}} {{$checkin->item->unit->name}}</td>
  <td>{{$checkin->location->name}}</td>
  <td>{{$checkin->supplier->name}}</td>
  <td>{{$checkin->date}}</td>
  <td>
    <form class="" action="/checkin/{{$checkin->id}}/delete" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
    </form>
  </td>
</tr>

@endforeach
