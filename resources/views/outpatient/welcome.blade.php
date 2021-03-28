@extends('outpatient/layout/part')

@section('title','IT Hospital')

@section('div')
 <!-- Caraousel Slide -->   
 <div id="slides" class="carousel slide" data-bs-ride="carousel">
    <ul class="carousel-indicators">
        <li data-bs-target="#slides" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#slides" data-bs-slide-to="1"></li>
        <li data-bs-target="#slides" data-bs-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imgoutpatient/Building.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="display-2">Project HIS</h1>
            <h3>Click The Button Below</h3>
            <button type="button" class="btn btn-light btn-lg">Get Demo</button>
            <button type="button" class="btn btn-primary btn-lg">Learn More</button>
          </div>
        </div>
        
        <div class="carousel-item">
          <img src="imgoutpatient/background2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src=imgoutpatient/background3.png class="d-block w-100" alt="...">
        </div>

        <a class="carousel-control-prev" href="#slides" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

  <!-- Two Column Section-->
  <div class="container-fluid doctor-said">
    <div class="row padding">
      <div class="col-lg-6 twocolumn">
        <h2> The Improtance of Health Care</h2><br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi fugit impedit ducimus repudiandae error debitis nemo rem minus, voluptates molestiae temporibus quasi, atque voluptatum blanditiis saepe hic accusamus alias perspiciatis.</p>
      </div>

      <div class="col-lg-6 text-center">
        <img src="imgoutpatient/Doctor1.jpg" alt="Doctor" class="img-fluid" width="300px" height="400px">
      </div>
    </div>
  </div>
@endsection
    
