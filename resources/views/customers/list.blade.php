@foreach ($customers as $customer)

<tr>
  <td><a href="/customers/{{$customer->id}}/edit">CUST/{{$customer->id}}</a></td>
  <td>{{$customer->name}}</td>
  <td>{{$customer->email}}</td>
  <td>{{$customer->phone}}</td>
  <td>{{$customer->address}}</td>
  <td>
    <form class="" action="/customers/{{$customer->id}}/delete" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
    </form>
  </td>
</tr>

@endforeach
