<div class="row button btn-warning">
  <?php
  if (!empty($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
</div>
<div class="row button btn-warning">
  <?php if (!empty($data['msg'])) echo $data['msg']; ?>
</div>
<?php
$pducts = $data['products'];
$paging = $data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">pductID</th>
      <th scope="col">pductname</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($pducts as $p) { ?>
      <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $p['productID'] ?></td>
        <td><?php echo $p['productname'] ?></td>
        <td><a href='<?php echo BASE_URL ?>adminproduct/productToggleStatus/<?php echo $p['productID'] ?>'><?php if ($p['status'] == 1)
         echo '<i class="fas fa-check text-primary"></i>';
         else
         echo '<i class="fas fa-times text-danger"></i>'; ?></a></td>
        <td><?php echo $p['Price'] ?></td>
        <td><?php echo $p['trash'] ?></td>
        <td><a href="<?php echo BASE_URL ?>adminproduct/productToggleTrash/<?php echo $p['productID'] ?>" onclick='return confirm("Bạn có chắc muốn xóa sản phẩm ?")'>Xóa</a>|<a href='<?php echo BASE_URL ?>adminproduct/updateproduct/<?php echo $p['productID'] ?>'>Sửa</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php $paging->createLinks(); ?>