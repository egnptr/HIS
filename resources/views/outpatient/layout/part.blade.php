<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/cssoutpatient/styles.css') }}"/>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>

  <body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img/logo.png" alt="Hospital Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button> 

            <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
              <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                    <a class="nav-link" href="/emergency">Emergency</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/payment">Payment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/patient-info">Patient Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/referral">Referral</a>
                  </li>
                  <li class="nav-item">
                  <button type="button" class="btn btn-outline-secondary">Sign in</button>
                  </li>
              </ul>
            </div>
        </div>
    </nav>

    @yield('div')

    <!-- Footer-->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2 leftpart">
            <a href="#"><img src="img/logo.png" alt="Logo"></a>
            <br><br>
            <p>Connet With us</p>
            <ul>
              <a href="#"><img src="#" alt="Ig Logo"></a>
              <a href="#"><img src="#" alt="Facebook Logo"></a>
              <a href="#"><img src="#" alt="Email Logo"></a>
            </ul>
          </div>

          <div class="col-md-5 text-center">
            <p></p>
            <hr>
            <br>
            <p>Weekday: 10:00-:00</p>
            <p>Weekend: 10:00-12:00</p>
          </div>

          <div class="col-md-5 text-justify">
            <p class="text-center">Another Branch </p>
            <hr>
            <br>
            <p>Branch 1, Jalan Muara Karang No 29 Pangendan, Jakarta Barat, 75114</p>
            <p>Branch 2, Jalan Gunung Kaido No 111 Padang Pasir, Surabaya timur, 65312 </p> 
            <p>Branch 3, Jalan Pulau Seribu Dayung No 1 Suara Bayu,Pekanbaru, Riau</p> 
            <p>Branch 4, Jalan Sungai Mendayung No 34 Pantai Indah Kapuk, Jakarta Pusat</p> 
          </div>
        </div>
      </div>

      <div class="copyright text-center">
        <hr>
        <p> Created by Billy Wijaya G & Mario Alfando</p>
      </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>