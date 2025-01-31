<!DOCTYPE html>

<html>

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel 10 CRUD Application </title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>



<div class="container">

    @yield('content')

</div>



</body>

</html>