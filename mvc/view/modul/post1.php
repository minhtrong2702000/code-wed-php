<?php
$PostModel = new PostModel;
$Posts = $PostModel->getAll(['trash' => 0, 'status' => 1]);
?>