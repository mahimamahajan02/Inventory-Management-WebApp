@foreach ($category as $categor)
  <tr>
    <td><a href="/settings/category/{{$categor->id}}/edit">{{$categor->name}}</a></td>
    <td>
      <form class="" action="/settings/category/{{$categor->id}}/delete" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
      </form>
    </td>
  </tr>

@endforeach
