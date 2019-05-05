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
      <?php $pagename='units'; ?>
      @include('layouts.nav')

      <div class="container">
            @include('layouts.flashmsg')
        <h1 class="main-heading mt-4">Units</h1>

        <a href="/settings/units/new" class="btn btn-success btn-sm" name="button"><i class="fas fa-plus"></i> Add new</a>
        <table class="table table-hover table-bordered mt-4">
          <thead class="thead-dark">
            <tr>
              <th>
                Unit name
              </th>
              <th>
                Delete
              </th>
            </tr>
          </thead>
          <tbody>
            @include('settings.units.list')
          </tbody>
        </table>

        </div>
        </body>
        </html>
