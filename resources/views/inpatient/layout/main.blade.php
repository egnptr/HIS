<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #025377">
        <div class="container-fluid">
            <a class="navbar-brand" href="/inpatient">Hospital Information System - <span class="text-warning">Inpatient</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end id=navbarNav">
              <ul class="navbar-nav">
                @yield('navbar-nav')
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/inpatient/dashboard" class="p-3">{{ auth()->user()->name }}</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    @yield('container')

    <!-- footer -->
    <footer style="background-color: #025377">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2 font-italic text-warning ">Inpatient<span></h3>

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="/#">Home</a>
                            |
                            <a class="text-white" href="/dashboard">Dashboard</a>
                            |
                            <a class="text-white" href="/kantin">Kantin</a>
                            |
                            <a class="text-white" href="/contact">Contact</a>
                        </p>
                        <p class="text-light py-2 mb-4">&copy;2021 Hospital Information System UPH</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                            Jl. M. H. Thamrin Boulevard 1100 
                            Lippo Village Tangerang 
                            15811 - Indonesia</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +62 12345678</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2"></i><a href="mailto:herryelbert11@gmail.com">herryelbert11@gmail.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About the Company</span>
					<p class="text-warning my-2" >We offer services and aims to stabilize or even cure sick individuals or patients.
                    </p>
                    <div class="py-2">
                        <a href="#"><i class="fa fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fa fa-youtube fa-2x text-danger mx-3"></i></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>
     <!-- end of footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>