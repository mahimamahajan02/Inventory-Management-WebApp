@foreach ($checkout as $checkout)

<tr>
  <td><a href="/checkout/{{$checkout->id}}/edit">CHKOUT/{{$checkout->id}}</a></td>
  <td>{{$checkout->item->name}}</td>
  <td>{{$checkout->quantity}} {{$checkout->item->unit->name}}</td>
  <td>{{$checkout->location->name}}</td>
  <td>{{$checkout->customer->name}}</td>
  <td>{{$checkout->date}}</td>
  <td>
    <form class="" action="/checkout/{{$checkout->id}}/delete" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
    </form>
  </td>
</tr>

@endforeach
