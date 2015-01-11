<!doctype html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700|Ubuntu' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/iconfont.css') }}
    {{ HTML::style('css/main.css') }}
</head>
<body>

@yield('content')

</body>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{{ HTML::script('js/built.js') }}
</html>