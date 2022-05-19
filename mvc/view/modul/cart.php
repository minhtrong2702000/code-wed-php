<?php
$cart = new Cart;
$cartItems = $cart->getItems();

?>
<form action='<?php echo BASE_URL ?>cart/update' method=post>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GIỎ HÀNG</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">STT</div>
          <div class="col-md-3">Tên hàng</div>
          <div class="col-md-2">Đơn giá</div>
          <div class="col-md-2">Số lượng</div>
          <div class="col-md-4">Thành tiền</div>
        </div>
        <?php
                    if (empty($cartItems)) echo "Giỏ hàng rỗng";
                    else {
                        $i = 1;
                        foreach ($cartItems as $productID => $item) {
                    ?>
       <div class="row">
            <div class="col-md-1"><?php echo $i++; ?></div>
            <div class="col-md-3"><?php echo $item['productname'] ?></div>
            <div class="col-md-2"><?php echo $item['Price'] ?></div>
            <div class="col-md-2"><input name='<?php echo $productID ?>' type=number max=150 min=0 step=1 
            value="<?php echo $item['quantity']; ?>"></div>
            <div class="col-md-4"><?php echo $cart->getSupTotal($productID) ?>000đ</div>

          </div>
    <?php }
                    } ?>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value='Save changes'>
          <a href="<?php echo BASE_URL ?>cart/checkout" class="btn btn-primary">Check Out</a>
      </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php
  if(isset($_SESSION['update'])){
    echo "<script>carticon.click()</script>";
    unset($_SESSION['update']);
  }
?>