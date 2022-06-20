<?php 
  $conn = mysqli_connect('localhost', 'root');
  mysqli_select_db($conn, 'ecommerce');
  $sql = "SELECT * FROM products WHERE featured='2'";
  $featured = $conn->query($sql);
?>

<div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="row">
      <h2 class="h-100 d-flex align-items-center justify-content-center"> Products Details:</h2>
      <?php
        while($product = mysqli_fetch_assoc($featured)):
          ?>
          <div class="col-md-5">
        <h4><?= $product['title'];?></h4>
        <img 
        src="<?= $product['image'];?>" 
        alt="<?= $product['title'];?>"
        class="img-thumbnail"
        />
        <p class="price"><b>$<?= $product['price'];?></b></p>
        <p class="price"><?= $product['description'];?></p>
        <p class="price"><?= $product['brandname'];?></p>
      </div>
      <?php endwhile; ?>
  </div>
</div>