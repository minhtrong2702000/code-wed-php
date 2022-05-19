<?php
$cats = $data['cats'];
$brands = $data['brands'];
$oldproduct = $data['oldproduct'];
?>
<div class="col-md-9">
    <h2>Sửa Sản Phẩm</h2>
    <div class="row btn-success">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="row">
        <form method=post action='' enctype='multipart/form-data'>

            <table>
                <tr>
                    <td class="col-md-3"><label>Product Name</label></td>
                    <td><input type='text' name='inputProductName' required value="<?php echo $oldproduct['productname'] ?>"></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Alias</label></td>
                    <td><input type='text' name='inputAlias' value="<?php echo $oldproduct['Alias'] ?>"></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Loại Sản Phẩm</label></td>
                    <td>
                        <select name="inputCatId">
                            <?php foreach ($cats as $cat) { ?>
                                <option value="<?php echo $cat['catId'] ?>" <?php if ($oldproduct['catID'] == $cat['catId']) echo "selected" ?>>
                                    <?php echo $cat['catName'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Loại Mèo</label></td>
                    <td>
                        <select name="inputBrandId">
                            <?php foreach ($brands as $brand) { ?>
                                <option value="<?php echo $brand['brandId'] ?>" <?php if ($oldproduct['brandId'] == $brand['brandId']) echo "selected" ?>>
                                    <?php echo $brand['brandName'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Chi tiết SP</label></td>
                    <td><textarea name='inputDetail' required cols="80" rows="10"><?php echo $oldproduct['Detail'] ?></textarea></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Giá SP</label></td>
                    <td><input type='number' name='inputPrice' max=3000000000 min=10 value="<?php echo $oldproduct['Price'] ?>"></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Giảm Giá SP</label></td>
                    <td><input type='number' name='inputSalePrice' max=300000000 min=10 value="<?php echo $oldproduct['salePrice'] ?>"></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label for="inputFileUpload">Ảnh SP</label></td>
                    <td><input type=file name="inputFileUpload">(Hình cũ:<?php echo $oldproduct['image']?>)</td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Status</label></td>
                    <td>
                        <select name="inputStatus">
                            <option value=0 <?php if($oldproduct['status']==0) echo "selected"?>>Ẩn</option>
                            <option value=1 <?php if($oldproduct['status']==1) echo "selected"?>>Hiện</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Trash</label></td>
                    <td>
                        <select name="inputTrash">
                            <option value=0 <?php if($oldproduct['trash']==0) echo "selected"?>>0</option>
                            <option value=1 <?php if($oldproduct['trash']==1) echo "selected"?>>1</option>
                        </select>
                    </td>
                </tr>


                <td>
                    <input type=submit name=submit value="Cap Nhat">
                    <input type=Reset name=Reset value=Reset>
                </td>

                </tr>
            </table>
        </form>
    </div>
</div>