@foreach ($locations as $location)
  <tr>
    <td><a href="/settings/locations/{{$location->id}}/edit">{{$location->name}}</a></td>
    <td>
      <form class="" action="/settings/locations/{{$location->id}}/delete" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
      </form>
    </td>
  </tr>
@endforeach
