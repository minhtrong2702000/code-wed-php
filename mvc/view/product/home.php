<?php
$products = $data['products'];
$paging = $data['paging'];
?>
<div class="row ">
  <?php
  foreach ($products as $product) { ?>
    <div class="col-md-3" style="height: 380px;">
      <div class="card">
        <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image'] ?>" class="card-img-left" alt="..." style="height: 190px">
        <div class="card-body text-center alert alert-danger">
          <h5 class="card-title" style="height: 70px;"><a href="<?php echo BASE_URL . 'product/productDeTail/' . $product['Alias'] ?>" class="text-decoration-none"><?php echo $product['productname'] ?></a></h5>
          <p class="card-text"><?php echo $product['Price'] ?><sup>đ</sup></p>
          <a class="btn btn-primary" href='<?php echo BASE_URL ?>cart/add/<?php echo $product['productID'] ?>/<?php echo $product['productname'] ?>/<?php echo $product['Price'] ?>'>Mua</a>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
<div class="row">
  <?php
  $paging->createLinks();
  ?>
</div>