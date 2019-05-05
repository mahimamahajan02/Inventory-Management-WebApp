@foreach ($units as $unit)
  <tr>
    <td>
      <a href="/settings/units/{{$unit->id}}/edit">
        {{$unit->name}}
      </a>
    </td>
    <td>
      <form class="" action="/settings/units/{{$unit->id}}/delete" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn-sm btn btn-danger"><span class="fa fa-trash-alt"></span></button>
      </form>
    </td>
  </tr>
@endforeach
