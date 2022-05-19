<?php
$cats = $data['cats'];
$brands = $data['brands'];
?>
<div class="col-md-9">
    <h2>Thêm Sản Phẩm</h2>
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
                    <td><input type='text' name='inputProductName' required></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Bí Danh</label></td>
                    <td><input type='text' name='inputAlias'></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Loại Sản Phẩm</label></td>
                    <td>
                        <select name="inputCatId">
                            <?php foreach ($cats as $cat) { ?>
                                <option value="<?php echo $cat['catId'] ?>">
                                    <?php echo $cat['catName'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Giống HOT</label></td>
                    <td>
                        <select name="inputBrandId">
                            <?php foreach ($brands as $brand) { ?>
                                <option value="<?php echo $brand['brandId'] ?>">
                                    <?php echo $brand['brandName'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Chi tiết </label></td>
                    <td><textarea name='inputDetail' required cols="80" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Giá </label></td>
                    <td><input type='number' name='inputPrice' max=300000 min=10></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Giá Sale</label></td>
                    <td><input type='number' name='inputSalePrice' max=300000 min=10></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label for="inputFileUpload">Ảnh </label></td>
                    <td><input type=file name="inputFileUpload"></td>
                </tr>

                <tr>
                    <td class="col-md-3"><label>Trạng Thái</label></td>
                    <td>
                        <select name="inputStatus">
                            <option value=0>Ẩn</option>
                            <option value=1>Hiện</option>
                        </select>
                    </td>
                </tr>


                <tr>
                <td>
                    <input type=submit name=submit value="Submit">
                    <input type=reset name=Reset value=Reset>
                </td>
                </tr>

                </tr>
            </table>
        </form>
    </div>
</div>