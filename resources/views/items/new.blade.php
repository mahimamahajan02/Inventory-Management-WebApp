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
      <?php $pagename='items'; ?>
      @include('layouts.nav')

      <div class="container">
          @include('layouts.flashmsg')
        <h1 class="main-heading mt-4">Add new Item</h1>


        <form class="mt-4" action="/items/store" method="POST">

            {{ csrf_field() }}

          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Item Name<span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" required name="name" id="name" placeholder="Item name" value="{{old("name")}}">
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-5">
              <textarea class="form-control" name="description" id="description"  placeholder="description"></textarea>
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-5">
              <select class="form-control" name="category" id="category">
                <option value="">Select category</option>

                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-5">
              <select class="form-control" name="unit" id="unit">
                <option value="">Select Unit</option>

                @foreach ($units as $unit)
                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
            <div class="col-sm-5">
              <select class="form-control" name="supplier" id="supplier">
                <option value="">Select Supplier</option>

                @foreach ($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="current_stock" class="col-sm-2 col-form-label">Opening stock<span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <input type="number" min="0" step="any" required class="form-control" name="current_stock" id="current_stock" placeholder="Opening stock" value="{{old("current_stock")}}">
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="reorder_level" class="col-sm-2 col-form-label">Reorder stock</label>
            <div class="col-sm-5">
              <input type="number" min="0" step="any" class="form-control" name="reorder_level" id="reorder_level" placeholder="Reorder" value="{{old("reorder_level")}}">
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
