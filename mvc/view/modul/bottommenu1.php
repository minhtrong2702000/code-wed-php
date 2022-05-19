<?php
$PageModel = new PageModel;
$Pages = $PageModel->getAll(['trash' => 0, 'status' => 1]);
?>

<div class="col-md-3 p-4">
        <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+C%C3%B4ng+Th%C6%B0%C6%A1ng+TP.HCM/@10.8302993,106.7727901,17z/data=!3m1!4b1!4m5!3m4!1s0x31752701a34a5d5f:0x30056b2fdf668565!8m2!3d10.8302993!4d106.7749788" class="text-decoration-none">
                Địa Chỉ: 20 Đường Tăng Nhơn Phú, Phước Long B, Quận 9, Thành phố Hồ Chí Minh</a>
</div>
<div class="col-md-3 p-4 ">
        <?php foreach ($Pages as $Page) { ?>
                <a href="<?php echo BASE_URL . 'page/productPage/' . $Page['title'] ?>" class='text-decoration-none'><?php echo $Page['title'] ?></a><br>
        <?php } ?>
</div>
