<?php
$BrandModel=new BrandModel;
$brands=$BrandModel->getAll(['trash'=>0,'status'=>1]);
$CatModel=new CategoryModel;
$cats=$CatModel->getAll(['trash'=>0,'status'=>1]);
$LinkModel=new LinkModel();
$links=$LinkModel->getAll(['Position'=>'header']);
$PageModel = new PageModel;
$Pages = $PageModel->getAll(['trash' => 0, 'status' => 1]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css">
  <script src="<?php echo BASE_URL; ?>public/js/popper.min.js" ></script>
  <script src="<?php echo BASE_URL; ?>public/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>public/font/157fa987aa.js"></script>
  <script src="https://kit.fontawesome.com/157fa987aa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="">

</head>


<body>
<header class="container bg-white ">

 <div class="row">
     <div class="col-md-4"><a href="http://nguyenvanminhtrongtttn:81/"><img src="<?php echo BASE_URL; ?>public/img/logo2kk.jpg" alt="brand" width="300px"; height="120"></a> </div>
     <div class="col-md-4 md-1">

       <form class="d-flex py-5" method=post action='<?php echo BASE_URL.'product/productSearch/'.LIMIT.'/0' ?>'>
        <input name='searchKey' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form></div>
     <div class="col-md-4 my-5">
     <span data-bs-toggle="modal" data-bs-target="#exampleModal">
       <i class="fas fa-shopping-cart" id="carticon">
       <?php 
       $cart=new Cart;
       if($cart->getCount()!=0) echo '('.$cart->getCount().')';
       ?>
       </i>
</span>
       <button class="btn btn-dark text-white" ><a class="navbar-brand"  href="http://nguyenvanminhtrongtttn:81/dashboard">Đăng Nhập</a></button> </div>
       
     <div class="col-sm">
     <nav id="nav-1">
     <div class="trangchu">
        <nav class="navbar navbar-expand-lg navbar-light alert alert-danger">
            <div class="container-fluid">
              <a class="navbar-brand" href="http://nguyenvanminhtrongtttn:81/">Trang Chủ</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/minhtrong272/">Trang Page</a>
                  </li>


                  <li class="nav-item dropdown">
             
                  <div class="dropdown-content">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Thú Cưng 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <?php foreach($cats as $cat){?>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL?>product/productByCat/<?php echo $cat['alias']?>"><?php echo $cat['catName']?></a></li>                    
                          <?php } ?>

                    </ul>
                
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hot pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <?php foreach($brands as $brand){?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL?>product/productByBrand/<?php echo $brand['alias']?>"><?php echo $brand['brandName']?></a></li>              
                      <?php } ?>
            
                    </ul>
                  </li>
                
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <?php foreach($links as $link){?>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL?>product/productByBrand/<?php echo $link['alias']?>"><?php echo $brand['brandName']?></a></li>              
                      <?php } ?>
            
                    </ul>
                   
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Chính Sách 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                  <?php foreach ($Pages as $Page) { ?>
                          <a class="dropdown-item" href="<?php echo BASE_URL . 'page/productPage/' . $Page['title'] ?>" class='text-decoration-none'><?php echo $Page['title'] ?></a><br>
                  <?php } ?>
                    </ul>
                  </li>
                </ul>
            </div>
          </nav>
          </div>
          </nav>
     </div>
     </div>
 </div>
</header>
<style>


.trangchu {
  transition: 0.4s;
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  padding: 0 10px;
  margin: 0 10px;
}
.dropdown-toggle:hover {
  border-top: 4px solid #ffffff;
  border-bottom: 4px solid #ffffff;
  padding: 6px 0;
}
 


</style>