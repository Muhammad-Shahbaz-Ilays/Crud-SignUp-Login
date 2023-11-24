<!DOCTYPE html>
<html>
<head>
<title>Laravel Crud Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="container">

    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Products</a>
        </li>
        
      </ul>
    </nav>

    @if($message = Session::GET('SUCCESS'))
       <div class="alert alert-success alert-block">
           <strong>{{ $message }}</strong>
       </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h3>Product Edit #{{$product->name}}</h3>
                    <form action="/products/{{ $product->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                             <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}"/>
                             @if($errors->has('name'))
                               <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                             <textarea class="form-control" name="description" rows="4" > {{ old('description', $product->description) }} </textarea>
                             @if($errors->has('description'))
                               <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                             <input type="file" name="image" class="form-control" value="$product->imageName"/>
                             @if($errors->has('image'))
                               <span class="text-danger">{{ $errors->first('image') }}</span>
                             @endif
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>