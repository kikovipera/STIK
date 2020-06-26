<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Raleway Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">



</head>
<body>

<!-- Begin page content -->
<main id="app" role="main" class="container-fluid">
<app-component :records="{{ json_encode($records) }}" :pagination="{{ json_encode($pagination) }}" ></app-component>
    @yield('content')
</main>



<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
