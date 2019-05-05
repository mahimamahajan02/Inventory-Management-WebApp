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
        <h1 class="main-heading mt-4">Edit item: {{$item->name}}</h1>

        <form class="mt-4" action="/items/{{$item->id}}/update" method="POST">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}


          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Item Name<span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" required name="name" value="{{$item->name}}" id="name" placeholder="Item name">
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="notes" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-5">
              <textarea class="form-control" name="description" id="description" value="{{$item->description}}" placeholder="description"></textarea>
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-5">
              <select class="form-control" name="category" id="category">
                <option value="">Select category</option>

                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{($item->category_id==$category->id) ? 'selected' : null }}>{{$category->name}}</option>
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
                    <option value="{{$unit->id}}" {{($item->unit_id==$unit->id) ? 'selected' : null }}>{{$unit->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>

          {{$item->supplier_id}}




                          <div class="form-group row">
                             <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                             <div class="col-sm-5">
                               <select class="form-control" name="supplier" id="supplier">
                                 <option value="">Select Supplier</option>

                                 @foreach ($suppliers as $supplier)
                                     <option value="{{$supplier->id}}" {{($item->supplier_id==$supplier->id) ? 'selected' : null }}>{{$supplier->name}}</option>
                                 @endforeach
                               </select>
                             </div>
                             <div class="col-sm-5"></div>
                           </div>

          <div class="form-group row">
            <label for="reorder_level" class="col-sm-2 col-form-label">Reorder level</label>
            <div class="col-sm-5">
              <input type="number" min="0" step="any" value={{$item->reorder_level}} class="form-control" name="reorder_level" id="reorder_level" placeholder="Item name">
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
