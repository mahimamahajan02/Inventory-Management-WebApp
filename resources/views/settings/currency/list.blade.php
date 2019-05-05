@foreach ($currency as $currenc)
  <tr>
    <td><a href="/settings/currency/{{$currenc->id}}/edit">{{$currenc->name}}</a></td>
    <td>
      <form class="" action="/settings/currency/{{$currenc->id}}/delete" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
      </form>
    </td>
  </tr>
@endforeach
