<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gudang Kami</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 fixed-top">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Gudang Kami</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('help')}}">Help</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <section class="header">
            @yield ('content1')
            
        </section>
        <section class="content2">
            @yield ('content2')
            
        </section>
        <section class="content3">
            @yield ('content3')
            
        </section>
        <section class="content3">
            @yield ('content4')
            
        </section>

        @extends ('_layouts.footer')
    </body>
</html>