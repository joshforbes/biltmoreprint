<!doctype html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biltmore Print and Image Admin</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    {{ HTML::style('css/admin.css') }}
</head>
<body>

@include('flash::message')
@include('layouts.partials.admin.nav')

<div class="container-fluid">
<div class="row">
@include('layouts.partials.admin.sidebar')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
@yield('content')
</div>
</div>
</div>



<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    $('#flash-overlay-modal').modal();
</script>


</body>
</html>