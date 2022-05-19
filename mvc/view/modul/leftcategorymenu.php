<?php
$CatModel = new CategoryModel;
$cats = $CatModel->getAll(['trash' => 0, 'status' => 1])
?>

<div class="card my-2 alert-danger text-center fw-bold">
<div class="card-header">Thú Cưng</div>
  <ul class="list-group list-group-flush">
    <?php foreach ($cats as $cat) { ?>
      <li class="list-group-item">
      <a href="<?php echo BASE_URL . 'product/productByCat/' . $cat['alias'] . '/' . LIMIT . '/0'; ?>" class="text-decoration-none"><?php echo $cat['catName'] ?></a></li>
    <?php } ?>
  </ul>
</div>