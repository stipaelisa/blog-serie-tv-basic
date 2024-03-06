<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

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

<!-- INIZIO HEADER -->
<header>
    <div class="container-fluid mb-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mx-3">
            <img class="img-fluid header-img" src="https://img.freepik.com/free-vector/vintage-tv_23-2147503075.jpg?w=740&t=st=1673976182~exp=1673976782~hmac=659ef389a70ae37664681e45d05522e9305e70ef26371225e3383c23e739c58a" alt="immagine tv retrò">
            </div>
            <div class="col-12 col-md-5 d-flex flex-column align-items-center justify-content-center mx-3">
            <h1 class="display-2 text-center">Blog Serie Tv</h1>
            <h2>Hello world!</h2>
            </div>
            
        </div>
    </div>
</header>

<!-- FINE HEADER -->


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center display-5 fw-bold">Serie Tv</h3>
        </div>
    </div>
      
        <div class="row my-4 mx-5 justify-content-center">
        
           @foreach($serieTv as $singolaSerie)
           <div class="col-12 col-md-3 pb-4">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{$singolaSerie['name']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$singolaSerie['release']}}</h6>
                        <p class="card-text"><span>{{$singolaSerie['emoji']}} </span>{{$singolaSerie['category']}}</p>
                       
                    </div>
                </div>
            </div>
           @endforeach
                
        
        </div>

    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>