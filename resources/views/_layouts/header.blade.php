<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('asset/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
        <title>Gudang Barang</title>
    </head>
    <body>
         <nav class="navbar navbar-expand-lg  fixed-top bg-warning p-3  shadow-lg" >
            <div class="container">
            <img  class="rounded-circle shadow-lg nav-img" src="{{asset('asset/img/cat.png')}}" alt="" >
            <a class="navbar-brand" href="/">Gudang Kucing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('type')}}">List type</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact me</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        @yield('containt 1')
        @yield('containt 2')
        @yield('containt 3')
        @yield('containt 4')

 @extends ('layouts.footer')