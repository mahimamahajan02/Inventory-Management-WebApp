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

      <?php $pagename='checkout'; ?>
      @include('layouts.nav')

      <div class="container">
          @include('layouts.flashmsg')
        <h1 class="main-heading mt-4">Add new Check-out</h1>


        <form class="mt-4" action="/checkout/store" method="POST">
          {{ csrf_field() }}

          <div class="form-group row">
            <label for="item" class="col-sm-2 col-form-label">Item Name </label>
            <div class="col-sm-5">
              <select class="form-control" name="item" id="item">

                <option value="">Select Item</option>

                @foreach (items() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-5">
              <input type="number" min="0" step="any" class="form-control" name="quantity" id="quantity" placeholder=" quantity">
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">Check-out Location</label>
            <div class="col-sm-5">
              <select class="form-control" name="location" id="location">
                <option value="">Select Location</option>

                @foreach (locations() as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-5">
              <input type="date" class="form-control"  name="date" id="date" placeholder="date">
            </div>
            <div class="col-sm-5"></div>
          </div>




          <div class="form-group row">
            <label for="customer" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-5">
              <select class="form-control" name="customer" id="customer">
                <option value="">Select Customer</option>

                @foreach (customers() as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="note" class="col-sm-2 col-form-label">Notes</label>
            <div class="col-sm-5">
              <textarea class="form-control" name="note" id="note"  placeholder="Note"></textarea>
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
