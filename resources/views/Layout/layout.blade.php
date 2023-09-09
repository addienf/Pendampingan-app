<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css " rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        {{-- @include('Component.navbar') --}}
        <div class="content">
            @include('Component.sidebar')
            @yield('content')
        </div>
    </div>
</body>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://kit.fontawesome.com/45b63b14b4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
<script src="DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
// let table = new DataTable('#myTable');
</script>

{{-- <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
     --}}
{{-- <script src="{{ asset('public\main.js')}}"></script> --}}
</html>
