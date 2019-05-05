@foreach ($suppliers as $supplier)

<tr>
  <td><a href="/suppliers/{{$supplier->id}}/edit">SUP/{{$supplier->id}}</a></td>
  <td>{{$supplier->name}}</td>
  <td>{{$supplier->category->name}}</td>
  <td>{{$supplier->email}}</td>
  <td>{{$supplier->phone}}</td>
  <td>{{$supplier->address}}</td>
  <td>
    <form class="" action="/suppliers/{{$supplier->id}}/delete" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
    </form>
  </td>
</tr>

@endforeach
