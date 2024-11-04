<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        
        <h1 class="bg-warning text-white m-3 " >Laravel Crud</h1>
       
        <div class="card-footer text-end">
            <a href="{{route('product.create')}}" class="btn btn-info">create</a>
          </div>
        
        @if (session('success'))
        <div class="col-md-10">

          <div class="alert alert-warning" role="alert">
            {{ session('success') }}
          </div>
        </div>
        @endif
        
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h4 class="text-center">Products</h4>
            </div>
            <div class="card-body">
              {{-- in action we define our route  --}}
              
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
