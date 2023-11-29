<!DOCTYPE html>
<html>
<head>
<title>Laravel Crud Application</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>



</head>
<body>

<div class="container mt-5">
    <table class="table table-border table-striped data-table">
        <thead>
            <tr>
                <th>SNO.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
                  
        </tbody>

    </table>
</div>
        <script>
            $(function(){
                var table = $('.data-table').DataTables({
                processing:true,
                serverSide:true,
                ajax:"{{ route('products.showdata') }}",
                columns:[
                    {data:DT_RowIndex,name:'DT_RowIndex'},
                    {data:'name',name:'name'},
                    {data:'description',name:'description'},
                    {data:'image',name:'image'},
                    {
                        data:'action',
                        name:'action',
                        orderable:true,
                        searchable:true
                    },    
                ]
            });
            }); 
        </script>
   
     
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

   
</body>
</html>