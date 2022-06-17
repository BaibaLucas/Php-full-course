<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Travers</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/architecture1.jpg" alt="Architecture" class="d-block w-100">
    <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
    </div>
    </div>
    <div class="carousel-item">
    <img src="images/nature1.jpg" alt="Nature" class="d-block w-100">
    <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
    </div>
    </div>
    <div class="carousel-item">
    <img src="images/travel1.jpg" alt="Travel" class="d-block w-100">
    <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
    </div>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Nature</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature3.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature4.jpg" class="img-fluid pb-3">
            </div>
            </div>
        </div>
    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Architecture</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/architecture2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/architecture3.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/architecture4.jpg" class="img-fluid pb-3">
            </div>
            </div>
        </div>
    </section>

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Travel</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel2.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel3.jpg" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel4.jpg" class="img-fluid pb-3">
            </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>