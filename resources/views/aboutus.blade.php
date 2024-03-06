<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutus">About us</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contatti">Contatti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item drop-item-custom" href="#">Sitcom</a></li>
            <li><a class="dropdown-item drop-item-custom" href="#">Drama</a></li>
            <li><a class="dropdown-item drop-item-custom" href="#">Adventure</a></li>
            <li><a class="dropdown-item drop-item-custom" href="#">Mistery</a></li>
            <li><a class="dropdown-item drop-item-custom" href="#">Rom-Com</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- FINE NAVBAR -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="text-center display-6 fw-bold my-4">Il nostro <span class="text-highlight">staff</span> </h4>
        </div>
    </div>
      
        <div class="row my-4 justify-content-center mx-3">
        @foreach($staff as $lavoratore)
        <div class="col-12 col-md-3 pb-5">
                <div class="card" >
                    <div class="card-body mx-auto">
                        <img class="img-fluid profile-img my-3" src="{{$lavoratore['profile-img']}}" alt="">
                        <h5 class="card-title">{{$lavoratore['name']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$lavoratore['job']}}</h6>
                        
                                            
                    </div>
                </div>
            </div>
           @endforeach
      
                
        
        </div>

    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>