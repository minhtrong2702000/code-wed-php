<?php
$PageModel = new PageModel;
$Pages = $PageModel->getAll(['trash' => 1, 'status' => 2]);
?>
<h3 class="section-title section-title-center">
<div class= "section-title-main" style="color:rgb(8, 38, 193);">

<p><center><span style="font-size:40px">Họat Động Tin Tức</span></center></p>

    </div>
</h3>
    </br>

    <div class="row">
        <?php foreach ($Pages as $Page) { ?>
          <div class="col-md-4">
          <div class="">
                <a href="<?php echo BASE_URL . 'page/productPage/' . $Page['title'] ?>" class='text-decoration-none'><?php echo $Page['title'] ?></a><br>
                </div>
                </div>  
        <?php } ?>
        </div>

        
				<a href="http://nguyenvanminhtrongtttn:81/page/productPage/[Chia%20s%E1%BA%BB]%204%20l%C3%BD%20do%20b%E1%BA%A1n%20n%C3%AAn%20s%E1%BB%9F%20h%E1%BB%AFu%20ngay%20m%E1%BB%99t%20ch%C3%BA%20ch%C3%B3%20Rottweiler!">
					
					<img alt="MÁCH BẠN CÁCH CHỌN ĐỒ BƠI HỢP MỐT" class="img-rounded pull-left" src="public/img/cho-rottweiler-an-gi-2.png"  width="420px" height="320px">
          
				</a>
        <a href="http://nguyenvanminhtrongtttn:81/page/productPage/Ch%C3%B3%20Alaskan%20Malamute%20c%C3%B3%20th%E1%BA%ADt%20s%E1%BB%B1%20%C4%91%C3%A1ng">
					
					<img alt="MÁCH BẠN CÁCH CHỌN ĐỒ BƠI HỢP MỐT"  class="img-rounded pull-right"  src="public/img/anh-dong-su-that-cuc-vui-ve-ca-3180-3309-1398047851.jpg"  width="420px" height="320px">
					
				</a>
        <a href="http://nguyenvanminhtrongtttn:81/page/productPage/M%C3%A8o%20Anh%20l%C3%B4ng%20ng%E1%BA%AFn%20Aln%20%E2%80%93%20Th%C3%B4ng%20tin,%20%C4%91%E1%BA%B7c%20%C4%91i%E1%BB%83m">
					
					<img alt="MÁCH BẠN CÁCH CHỌN ĐỒ BƠI HỢP MỐT" class="img-rounded center-block" src="public/img/anh-meo-che-anh-meo-bua-15.jpg"  width="420px" height="320px">
					
				</a>
       

        </div>
        </div>

        
			</div>
</div>