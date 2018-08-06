<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Portal Konsultasi Kesejahteraan Keluarga">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal Konsultasi Kesejahteraan Keluarga</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">

    @yield('content')

  </body>
</html>
