<?php
$BrandModel = new BrandModel;
$brands = $BrandModel->getAll(['trash' => 0, 'status' => 1])
?>

<div class="card my-2 alert-danger text-center fw-bold">
<div class="card-header">Hot Pet</div>
    <ul class="list-group list-group-flush">
    <?php foreach ($brands as $brand) { ?>
      <li class="list-group-item">
        <a href="<?php echo BASE_URL . 'product/productByBrand/' . $brand['alias'] . '/' . LIMIT . '/0'; ?>" class="text-decoration-none"><?php echo $brand['brandName'] ?></a></li>
    <?php } ?>
  </ul>
</div>