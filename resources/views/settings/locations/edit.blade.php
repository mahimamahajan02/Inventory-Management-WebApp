<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inventory Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <script src="/js/app.js"></script>
        <script src="/js/main.js"></script>

    </head>
    <body>

      <?php $pagename='locations'; ?>
      @include('layouts.nav')

      <div class="container">
          @include('layouts.flashmsg')
        <h1 class="main-heading mt-4">Edit Location:{{$location->name}}</h1>
        <form class="mt-4" action="/settings/locations/{{$location->id}}/update" method="POST">

          {{ csrf_field() }}
          {{ method_field('PATCH') }}




          <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">Location<span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" required name="location" value="{{$location->name}}" id="location" placeholder="location">
            </div>
            <div class="col-sm-5"></div>
          </div>



          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>


        </form>


      </div>
    </body>
</html>
