@if (Session::has('flash_message'))
  <div class='flashmsg mt-3'>
    <div class="alert alert-success">
      <span class="fa fa-check-circle"></span>
      {!! session('flash_message') !!}
    </div>
  </div>
@endif

@if (Session::has('error_message'))
  <div class='flashmsg mt-3'>
    <div class="alert alert-danger">
      <span class="fa fa-times-circle"></span>
      {!! session('error_message') !!}
    </div>
  </div>
@endif
