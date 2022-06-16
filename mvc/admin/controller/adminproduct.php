<?php
class AdminProduct extends AdminController
{
    public function productList($limit = LIMIT, $offset = 0)
    {
        $adminproductmodel = new AdminProductModel;
        $data = $adminproductmodel->productList($limit, $offset);
        $this->loadAdminView('adminmaster1', 'adminproduct/productlist', $data);
    }
    public function productListInTrash($limit = LIMIT, $offset = 0)
    {
        $adminproductmodel = new AdminProductModel;
        $data = $adminproductmodel->productListIntrash($limit, $offset);
        $this->loadAdminView('adminmaster1', 'adminproduct/productlistintrash', $data);
    }
    public function productToggleTrash($productID)
    {
        $adminproductmodel = new AdminProductModel;
        $data = $adminproductmodel->ToggleTrash($productID);
    }
    public function productToggleStatus($productID)
    {
        $adminproductmodel = new AdminProductModel;
        $data = $adminproductmodel->ToggleStatus($productID);
    }
    public function addproduct()
    {//xu ly du lieu nhan duocd
        if (isset($_POST['submit'])) 
        {
            $adminproductmodel = new AdminProductModel;
            $adminproductmodel->doAddproduct();
        }
        //hien thi form
        $catModel = new AdminCategoryModel;
        $data['cats'] = $catModel->getAll(['trash' => 0, 'status' => 1]);
        $brandModel = new AdminBrandModel;
        $data['brands'] = $brandModel->getAll(['trash' => 0,'status' => 1]);
        $this->loadAdminView('adminmaster1', 'adminproduct/addproduct', $data);
    }
    public function UpdateProduct($productID)
    {
        $adminproductmodel = new AdminProductModel;
        if (isset($_POST['submit']))
        {
            $adminproductmodel->doUpdateproduct($productID);
        }
        $catModel = new AdminCategoryModel;
        $data['cats'] = $catModel->getAll(['trash' => 0, 'status' => 1]);
        $brandModel = new AdminBrandModel;
        $data['brands'] = $brandModel->getAll(['trash' => 0, 'status' => 1]);
        $data['oldproduct'] = $adminproductmodel->get(['productID' => $productID]);
        $this->loadAdminView('adminmaster1', 'adminproduct/updateproduct', $data);
    }
}