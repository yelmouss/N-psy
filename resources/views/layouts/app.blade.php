<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" type="image/png" href="{{ asset('test.png') }}" />
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

          <script src="{{ asset('js/app.js') }}"></script>


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-m {
            transition: transform .2s;

        }
        .nav-m:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
    </style>

    @yield('style')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li>
             <h6 class="nav-link text-xs">France +1 (696) 696 6963 | Europe : (+33) 22 33 22 33 44</h6>  
            </li>

           
        </ul>
                    
        <!-- <i class="fab fa-youtube-square  "></i> -->
     
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="https://cdn-icons-png.flaticon.com/512/194/194917.png"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>



                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="https://cdn-icons-png.flaticon.com/512/194/194917.png"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            {{ Auth::user()->profile }}
                            <small>Membre depuis {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->


                    <li class="user-footer">

                    
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer bg-secondary">
        <div class="row">

        <div class="container col-6">
            <h3 class="text-center text-dark ">PLATEFORME DE FORMATIONS EN RELATION D'AIDE</h3>
            <hr>
            <p class="container w-75"> Le CFRA propose à des élèves francophones du monde entier des formations professionnelles en ligne et en salle, adaptées à vos besoins. Notre mission
                 est de faciliter l’accès à un enseignement de qualité, permettant de former des thérapeutes en relation d’aide compétents et confiants dans leur nouveau
                  métier ou leur pratique complémentaire.
                Notre but est d'offrir un enseignement professionnel basé sur une approche psycho-émotionnelle performante, concrète et efficace.</p>
        </div>

        <div class="container col-6">
        <div class="card text-white bg-dark ">
                    <div class="row">
                    <img class="card-img-top img-fluid w-25  col-4 m-2 ml-3 elevation-3 img-rounded" src="{{ asset('logoblanc.png') }}" alt="Card image cap">
                    <div class="col-7">
                        <hr>
                    <h5 class="card-title">Infromations générales</h5>
                        <p class="card-text">Centre de Formations en Relation d'Aide
                    Le Groupe UniLearn Inc.
                    1885 Rue Jean Picard
                    Laval (Québec), H7T 2K4, Canada
                    Canada : +1 (438) 317 0342
                    Europe : (+33) 07 81 69 00 80.</p>
                    </div>
                    </div>

            <div class="card-body">               
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                <div class="card-footer text-xs">
                Etablissement d'enseignement reconnu et accrédité                 
                Nos formations donnent droit à des crédits d'impôt
                </div>
            </div>
            </div>
        </div>
        </div>
      
    </footer>

    <!-- Main Footer -->
    <footer class="main-footer bg-dark">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; {{ now()->year }} <a href="https://adminlte.io">MyPsyAppli.com</a>.</strong> All rights
        reserved.
    </footer>
</div>

<!-- <script src="{{ mix('js/app.js') }}" defer></script> -->

@yield('scripts')

@stack('page_scripts')
</body>


</html>


