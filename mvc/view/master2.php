<?php require_once PATH_TO_MODUL . 'header.php'; ?>
<?php require_once PATH_TO_MODUL . 'slide.php'; ?>
<div class="container mt-3">
  <div class="row p-4">
    <div class="col-md-3">
      <?php require_once PATH_TO_MODUL . 'leftcategorymenu.php'; ?> 
                                   
      <?php require_once PATH_TO_MODUL . 'leftbrandmenu.php'; ?>
    </div>
    <div class="col-md-9">
  <?php include_once PATH_TO_VIEW . $viewName . '.php'; ?>
</div>
</div>
</div>
<footer class="container-fluid bg-dark">
    <?php require_once PATH_TO_MODUL . 'bottommenu1.php'; ?>
    <?php require_once PATH_TO_MODUL . 'bottommenu2.php'; ?>
 
</footer>
<?php require_once PATH_TO_MODUL . 'cart.php'; ?>
</body>
 @copyright 2020 Bởi Minh Trọng
</html>
