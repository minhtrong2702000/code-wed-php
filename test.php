<?php
require_once 'config.php';
require_once PATH_TO_CORE. 'controller.php';
require_once PATH_TO_CORE.'usercontroller.php';
require_once PATH_TO_CONTROLLER.'product.php';
$p=new Product;
$p->productDetail(5);
?>