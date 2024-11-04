<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="card-footer text-end">
          <a href="{{route('product.index')}}" class="btn btn-info">products</a>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h4 class="text-center">Create Product</h4>
            </div>
            <div class="card-body">
              {{-- in action we define our route  --}}
              <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" value="{{old('name')}}" class=" 
                  @error('name')is-invalid @enderror
                  form-control" id="name" name="name" placeholder="Enter Name">
                  @error('name')
                    <p class="invalid-feedback" >{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sku" class="form-label">SKU</label>
                  <input type="text" value="{{old('sku')}}"  class="
                   @error('sku')is-invalid @enderror
                  form-control" id="sku" name="sku" placeholder="Enter SKU">
                  @error('sku')
                    <p class="invalid-feedback" >{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="text" value="{{old('price')}}" class="
                   @error('price')is-invalid @enderror
                  form-control" id="price" name="price" placeholder="Enter Price" >
                  @error('price')
                  <p class="invalid-feedback" >{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-end">
              <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
