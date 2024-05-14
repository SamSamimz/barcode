<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode | Laravel</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootatrap.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=abeezee:400" rel="stylesheet" />
    <style>
        body {
            font-family: 'ABeeZee', sans-serif;
        }
    </style>
    </head>
<body class="bg-light">
    <div class="container">
        <h2 class="text-center py-2">Welcome Artisan</h2>
        
        {{$slot}}
    </div>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>    
    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
</body>
</html>