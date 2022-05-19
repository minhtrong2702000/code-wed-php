<?php
$products = $data['products'];
$paging = $data['paging'];
$totalRecords = $data['totalRecords'];
?>
<div class="container">
  <div class="row">
    <?php echo " Tổng số sản phẩm tìm thấy: " . $totalRecords . " Sản phẩm. "; ?>
  </div>
  <div class="row">
    <?php
    foreach ($products as $product) { ?>
      <div class="col-md-3">
        <div class="card">
          <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $product['image'] ?>" class="card-img-top" alt="...">
          <div class="card-body text-center alert alert-danger">
            <h5 class="card-title"><a href="<?php echo BASE_URL . 'product/productDetail/' . $product['Alias'] ?>" class='text-decoration-none'><?php echo $product['productname'] ?></h5>
            <p class="card-text"><?php echo $product['Price'] ?><sup>đ</sup></p>
            <a class="btn btn-primary" href="<?php echo BASE_URL ?>cart/add/<?php echo $product['productID'] ?>/<?php echo $product['productname'] ?>/<?php echo $product['Price'] ?> ">Mua</a>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="row text-center">
      <?php
      $paging->createLinks();
      ?>
    </div>
  </div>
</div>