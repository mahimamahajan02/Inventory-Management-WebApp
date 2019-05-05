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

      <?php $pagename='suppliers'; ?>
      @include('layouts.nav')

      <div class="container">
          @include('layouts.flashmsg')
        <h1 class="main-heading mt-4">Edit Supplier: {{$supplier->name}}</h1>




          <form class="mt-4" action="/suppliers/{{$supplier->id}}/update" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

          <div class="form-group row">
            <label for="supplier" class="col-sm-2 col-form-label">Supplier Name<span class="text-danger">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" required name="name"  id="supplier" value="{{$supplier->name}}" placeholder="supplier">
            </div>
            <div class="col-sm-5"></div>
          </div>


          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label"> Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" name="email" id="email" value="{{$supplier->email}}" placeholder=" email">
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-5">
              <select class="form-control" name="category" id="category">
                <option value="">Select category</option>

                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{($supplier->category_id==$category->id) ? 'selected' : null }}>{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-sm-5"></div>
          </div>



          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-5">
              <input type="number" min="0" step="any" class="form-control" name="phone" id="phone" value="{{$supplier->phone}}"  placeholder=" phone">
            </div>
            <div class="col-sm-5"></div>
          </div>

          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-5">
              <textarea class="form-control" name="address" id="address"  placeholder="Address">{{$supplier->address}}</textarea>
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
