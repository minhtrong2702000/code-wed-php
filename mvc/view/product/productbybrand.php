<?php
$products = $data['products'];
$paging = $data['paging'];
$brand = $data['brand'];
?>
<div class="row">
  <div class="col alert alert-danger"><?php echo $brand['brandName'] ?></div>
</div>
<div class="row">
  <?php foreach ($products as $product) { ?>
    <div class="col-md-3">
      <img src="<?php echo BASE_URL ?>public/upload/<?php echo $product['image'] ?>" class="card-img-top" alt="..." style="height: 140px">
      <div class="card-body text-center alert alert-danger">
        <h5 class="card-title" style="height: 70px"> <a href="<?php echo BASE_URL . 'product/productDeTail/' . $product['Alias'] ?>" class="text-decoration-none"><?php echo $product['productname'] ?></a></h5>
        <p class="card-text"><?php echo $product['Price'] ?><sup>đ</sup></p>
        <a class="btn btn-primary" href="<?php echo BASE_URL ?>cart/add/<?php echo $product['productID'] ?>/<?php echo $product['productname'] ?>/<?php echo $product['Price'] ?> ">Mua</a>
      </div>
    </div>
  <?php } ?>
</div>
<div class="row text-center">
  <?php
  $paging->createLinks();
  ?>
</div>
</div>