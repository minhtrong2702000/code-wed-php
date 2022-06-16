<?php require_once PATH_TO_MODUL . 'header.php'; ?>
<?php require_once PATH_TO_MODUL . 'slide.php'; ?>
<div class=" container mt-3 ">
  <div class="row p-2">
    <div class="col-md-3">
      <?php require_once PATH_TO_MODUL . 'leftcategorymenu.php'; ?> 
                                   
      <?php require_once PATH_TO_MODUL . 'leftbrandmenu.php'; ?>
	  <a href="https://www.youtube.com/watch?v=9qvh_CSAFJw&t=8s"><mark><b> Giới Thiệu </b> </mark> </a>

	  <video width="320" height="240" controls>
  <source src="public/img/shoppet.mp4" type="video/mp4">
Giới Thiệu
</video>
<img src="<?php echo BASE_URL; ?>public/img/chatluong.jpg" alt="brand" width="320px"; height="420">
    </div>
    <div class="col-md-9 ">
  <?php include_once PATH_TO_VIEW . $viewName . '.php'; ?>
</div>
</div>
<div class="text-centent">
<?php require_once PATH_TO_MODUL . 'bottommenu3.php'; ?>
<b></b>
</div>
</div>
<footer class="container-fluid alert alert-danger">

<div class="row">
  
    <?php require_once PATH_TO_MODUL . 'bottommenu1.php'; ?>
    <?php require_once PATH_TO_MODUL . 'bottommenu2.php'; ?>
</div>

</footer>
<?php require_once PATH_TO_MODUL . 'cart.php'; ?>
</body>
 @copyright 2022 Bởi Minh Trọng
</html>
