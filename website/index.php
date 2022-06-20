<?php 
  $conn = mysqli_connect('localhost', 'root');
  mysqli_select_db($conn, 'ecommerce');
  $sql = "SELECT * FROM products WHERE featured='1'";
  $featured = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TechBuy</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TechBuy.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-lg-2">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="product-laptops.php">Laptops</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="product-phones.php">Phones</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="row">
      <h2 class=""> Top Products </h2>
      <br><br>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
          ?>
          <div class="col-md-5">
          <br><br>
        <h4> <?= $product['title'];?></h4>
        <img 
        src="<?= $product['image'];?>" 
        alt="<?= $product['title'];?>" 
        class="img-thumbnail";
        />
        <p class="price">$ <?= $product['price'];?></p>
        <a href="details.php">
          <button type="button" class="btn btn-success" data-bs-toggle="modal"
          data-target="#details-1">
          More
          </button>
        </a>
      </div>
      <?php endwhile; ?>
  </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>