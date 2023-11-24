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
        <li class="nav-item">
          <a class="nav-link" href="products/create">New Products</a>
        </li>
        
      </ul>
    </nav>

    <div class="">
        <a href="products/create" class="btn btn-dark mt-2">New products</a>
    </div>

    <div class="container">
        <h1>New Products</h1>
    </div>

    <table class="table table-border table-striped table-striped table-hover">
        <thead>
            <tr>
                <th>SNO.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <image src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50" />
                </td>
                <td>
                  <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-small" > Edit</a>
                  <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-small" > Delete</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $products->links('pagination::bootstrap-5') }}
</div>
</body>
</html>