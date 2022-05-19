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
$products = $data['products'];
$paging = $data['paging'];
?>
<a class="btn btn-primary" href="#" role="button">Link</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">userId</th>
      <th scope="col">username</th>
      <th scope="col">FullName</th>
      <th scope="col">Email</th>
      <th scope="col">Trash</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($products as $pro) { ?>
      <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $pro['userId'] ?></td>
        <td><?php echo $pro['username'] ?></td>
        <td><?php echo $pro['fullname'] ?></td>
        <td><?php echo $pro['email'] ?></td>
        <td><a href='<?php echo BASE_URL ?>UserProduct/productUserStatus/<?php echo $pro['userId'] ?>'><?php if ($pro['status'] == 1)
                                                                                                              echo '<i class="fas fa-check text-primary"></i>';
                                                                                                            else
                                                                                                              echo '<i class="fas fa-times text-danger"></i>'; ?></a></td>
        <td><a href="<?php echo BASE_URL ?>UserProduct/productDelete/<?php echo $pro['userId'] ?>" onclick='return confirm("Ban co chac muon xoa vinh vien san phan nay ?")'>xoa vinh vien</a>|<a href='<?php echo BASE_URL ?>UserProduct/productUserTrash/<?php echo $pro['userId'] ?>'>Khoi phuc </a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php $paging->createLinks(); ?>