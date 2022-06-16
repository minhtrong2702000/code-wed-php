<?php
  $CurrentProduct = $data['CurrentProduct'];
  $SameProducts = $data['SameProducts'];
  ?>

  <div class="col-md-9">
    <div class="row">
      <div class="card mb-3">
        <div class=" row g-0">
        <div class="col-md-4">
          <div class="hinh2">
          <img id="hinh2" src="<?php echo BASE_URL ?>public/upload/<?php echo $CurrentProduct['image'] ?>" class="img-fluid" style="height: 400px;width: 450px">
        </div>
        </div>

  

        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $CurrentProduct['productname'] ?></h5>
            <p class="card-text"><?php echo $CurrentProduct['Detail'] ?></p>
            <p class="card-text"><?php echo $CurrentProduct['Price'] ?><sup>đ</sup></p>
            <a class="btn btn-primary" href='<?php echo BASE_URL ?>cart/add/<?php echo $CurrentProduct['productID'] ?>/<?php echo $CurrentProduct['productname'] ?>/<?php echo $CurrentProduct['Price'] ?>'>Mua</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-12 alert alert-danger">TẤT CẢ CÁC LOẠI SẢN PHẨM</div>
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <?php foreach ($SameProducts as $SameProduct) { ?>
            <div class="col-md-3">
              <div class="card">
                <img id="hinh2" src="<?php echo BASE_URL ?>public/upload/<?php echo $SameProduct['image'] ?>" class="card-img-top" alt="..." style="height: 180px"style="width: 180px">
                <div class="card-body text-center alert alert-danger">
                  <h5 class="card-title" style="height: 70px"><a href="<?php echo BASE_URL . 'product/productDetail/' . $SameProduct['Alias'] ?>" class='text-decoration-none'><?php echo $SameProduct['productname'] ?></h5>
                  <p class="card-text"><?php echo $SameProduct['Price'] ?><sup>đ</sup></p>
                  <a class="btn btn-primary" href="<?php echo BASE_URL ?>cart/add/<?php echo $SameProduct['productID'] ?>/<?php echo $SameProduct['productname'] ?>/<?php echo $SameProduct['Price'] ?> ">Mua</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>


  <style>
#hinh2 {
transition: all 1s ease;
-webkit-transition: all 1s ease;
-moz-transition: all 1s ease;
-o-transition: all 1s ease;
}
 
#hinh2:hover {
transform: scale(1.5,1.5);
-webkit-transform: scale(1.5,1.5);
-moz-transform: scale(1.5,1.5);
-o-transform: scale(1.5,1.5);
-ms-transform: scale(1.5,1.5);
}
</style>
