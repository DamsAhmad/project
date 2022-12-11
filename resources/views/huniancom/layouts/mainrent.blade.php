@extends('layout.template')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Hunian.com | Jual Tempat Tinggal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link href="/css/rent.css" rel="stylesheet">
    <link href="/css/detail.css" rel="stylesheet">

</head>

<body>

    @include('huniancom.layouts.headrent')

    <main>

        @yield('content')

    </main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
