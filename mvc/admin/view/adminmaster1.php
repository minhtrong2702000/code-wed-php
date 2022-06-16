<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Pet</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>public/css/custom.css">
  <script src="<?php echo BASE_URL; ?>public/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/157fa987aa.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container bg-light">
    <div class="row">
        <div class="col-md-3"><img src="<?php echo BASE_URL; ?>public/img/lg.jpg" alt="brand" width="350px"; height="150"> </div>
          <div class="col-md-4">
              <?php if(isset($_SESSION['username'])) echo $_SESSION['username']  ?>
              <a class="fas fa-sign-out-alt text-decoration-none" href="<?php echo BASE_URL?>auth/Adminlogout/">Đăng Xuất</a>

          </div>
    </div>

</header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
			    <div class="card">
                <h5 class="card-header">Shop Pet</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Quản lý sản phẩm
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>adminproduct/addproduct">Thêm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>adminproduct/productList/<?php echo LIMIT.'/0'?>">Xem danh sách sản phẩm</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>adminproduct/productListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                            </div>
                          </div>
                       </div> 
                       <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Quản lý nhóm sản phẩm
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <a class="nav-link btn btn-success" href="#">Thêm nhóm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="#">Xem danh sách nhóm sản phẩm</a>
                            <a class="nav-link btn btn-success" href="#">Xem thùng rác</a>
                            </div>
                          </div>
                       </div>
                       <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThere">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThere" aria-expanded="false" aria-controls="collapseThere">
                              Quản lý Tất cả user
                            </button>
                          </h2>
                          <div id="collapseThere" class="accordion-collapse collapse " aria-labelledby="headingThere" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>UserProduct/productUser/<?php echo LIMIT.'/0'?>">Xem danh sách User</a>
                            <a class="nav-link btn btn-success" href="<?php echo BASE_URL?>UserProduct/productUserInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
                            </div>
                          </div>
                       </div>                      
                  </div>

              </div>
           
       
        </div>
<div class="col-md-9">
    <?php require_once PATH_TO_ADMINVIEW.$view.".php"?>
</div>
    </div>
</div>
   <footer class="container-fluid row bg-dark text-center">
   @copyright 2022
  </footer>
</body>
</html>