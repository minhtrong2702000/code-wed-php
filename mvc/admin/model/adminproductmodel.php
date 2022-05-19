<?php
class AdminProductModel extends AdminModel
{
    protected $table = DB_PREFIX . 'product';
    protected $fieId = ['productName', 'Alias', 'catID', 'brandId', 'Detail', 'Price', 'salePrice', 'image', 'trash', 'status'];
    protected $key = 'productId';
    //cac fuction can thiet
    public function productList($limit, $offset)
    {
        //lay san pham
        $data['products'] = $this->getAllLimit(['trash' => 0], $limit, $offset);
        //tong san pham
        $totalRecords = count($this->getAll(['trash' => 0]));
        //chuan bi paging
        $data['paging'] = new paging('adminproduct/productList/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function productListInTrash($limit, $offset)
    {
        $data['products'] = $this->getAllLimit(['trash' => 1], $limit, $offset);
        $totalRecords = count($this->getAll(['trash' => 1]));
        $data['paging'] = new paging('adminproduct/productListInTrash/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function ToggleTrash($productID)
    {
        if ($this->toggle('trash', $productID))
            $_SESSION['msg'] = "Thực Hiện Thành Công";
        else
            $_SESSION['msg'] = "Thực Hiện Thất Bại ";
        header('location:' . BASE_URL . 'adminproduct/productList/' . LIMIT . '/0');
    }
    public function ToggleStatus($productID)
    {
        if ($this->toggle('status', $productID))
            $_SESSION['msg'] = "Thuc hien thanh cong";
        else
            $_SESSION['msg'] = "Thuc hien that bai";
        header('location:' . BASE_URL . 'adminproduct/productList/' . LIMIT . '/0');
    }
    public function doAddproduct()
    {//lay du lieu,
        $newPro['productname'] = $_POST['inputProductName'];
        $newPro['Alias'] = $_POST['inputAlias'];
        $newPro['catID'] = $_POST['inputCatId'];
        $newPro['brandId'] = $_POST['inputBrandId'];
        $newPro['Detail'] = $_POST['inputDetail'];
        $newPro['Price'] = $_POST['inputPrice'];
        $newPro['salePrice'] = $_POST['inputSalePrice'];
        $newPro['image'] = basename($_FILES['inputFileUpload']['name']);
        $newPro['trash'] = 0;
        $newPro['status'] = $_POST['inputStatus'];

        $helper = new Helper;
        if ($newPro['Alias'] == '') $newPro['Alias'] = $helper->to_alias($newPro['productname']);
        $_SESSION['msg'] = '';
        if ($newPro['Price'] < $newPro['salePrice'])
            $_SESSION['msg'] .= 'Giá Sale phải nhỏ hơn giá bán.';
        else {
            $uploadSuccess = $helper->doUpload('inputFileUpload');
            if ($uploadSuccess)
            {
                if ($this->insert($newPro)) $_SESSION['msg'] .= 'Thêm sản phẩm thành công.';
                else $_SESSION['msg'] .= 'Thêm sản phẩm thất bại.';
            }
        }
    }
    public function doUpdateproduct($productID)
    {
        $newPro['productname'] = $_POST['inputProductName'];
        $newPro['Alias'] = $_POST['inputAlias'];
        $newPro['catID'] = $_POST['inputCatId'];
        $newPro['brandId'] = $_POST['inputBrandId'];
        $newPro['Detail'] = $_POST['inputDetail'];
        $newPro['Price'] = $_POST['inputPrice'];
        $newPro['salePrice'] = $_POST['inputSalePrice'];
        $newPro['status'] = $_POST['inputStatus'];
        $newPro['trash'] = $_POST['inputTrash'];
        $helper = new Helper;
        if ($newPro['Alias'] == '') $newPro['Alias'] = $helper->to_alias($newPro['productname']);
        $_SESSION['msg'] = '';
        if ($newPro['Price'] < $newPro['salePrice'])
            $_SESSION['msg'] .= 'Giá Sale phải nhỏ hơn giá      bán.';
        else
        if ($_FILES['inputFileUpload']['name'] != '') 
        {
            $_SESSION['msg'] .= "file up len:" . $_FILES['inputFileUpload']['name'];
            $uploadSuccess = $helper->doUpload('inputFileUpload');
            if ($uploadSuccess) 
            {
                $newPro['image']=$_FILES['inputFileUpload']['name'];
                if($this->update($newPro,$productID)) $_SESSION['msg'] .= 'Cập nhật sản phẩm thành công.';
                else
                    $_SESSION['msg'] .= 'Cập nhật sản phẩm thất bại.';
                   header("Location:".BASE_URL."adminproduct/productlist");
                    exit;
            }
        }
        else
        {
            if($this->update($newPro,$productID))
            $_SESSION['msg']='Cập nhật sản phẩm thành công.';
            else
            $_SESSION['msg']='Cập nhật sản phẩm thất bại.';
          header("Location:".BASE_URL."adminproduct/productlist");
            exit;
        }
    }
}
