<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Pet</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css" >
  <script src="<?php echo BASE_URL; ?>/js/popper.min.js"></script>
  <script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js" ></script>

  <script src="https://kit.fontawesome.com/fb3aa5052d.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container bg-light">
    <div class="row">
    <div class="col-md-3"><img src="<?php echo BASE_URL; ?>public/img/lg.jpg" style ="width:15%;"alt="logo"></div>
        <div class="col-md-4"></div>
          
    </div>

</header>
<div class="container">
 <?php require_once PATH_TO_VIEW . $viewName . '.php'; ?>
</div>


   <footer class="container-fluid row bg-dark">
   @copyright 2020 Bởi Minh Trọng
    </footer>



</body>
</html>