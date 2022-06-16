<?php
$imageModel=new ImageModel;
$images=$imageModel->getAll(['trash'=>0, 'status'=>1, 'Position'=>1]);

?>
<div class="container-fluid  " >
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active " data-bs-interval="800" >
          <img src="<?php echo BASE_URL.'public/img/'.$images[0]['image'] ?>" class="mx-auto d-block" width="1300" height="700" alt="...">
            <div class="carousel-caption d-none d-md-block">
<marquee width="50%">Chó là bạn Không Phải Thức ăn , Mèo là Hoàng Thượng lun Phải nuông chiều</marquee>
            </div>
          </div>
          <?php foreach($images as $image){?>
            <div class="carousel-item " data-bs-interval="800" >
            <img src="<?php echo BASE_URL.'public/img/'.$image['image'] ?>" class="mx-auto d-block "width="1300" height="700" alt="...">
              <div class="carousel-caption d-none d-md-block">
              <marquee width="50%">Chó là bạn Không Phải Thức ăn , Mèo là Hoàng Thượng lun Phải nuông chiều</marquee>
              </div>
            </div>
            
          <?php } ?>
        </div>   
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>