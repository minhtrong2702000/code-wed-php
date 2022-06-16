<?php
class UserProduct extends UserController
{
    public function productUser($limit = LIMIT, $offset = 0)
    {
        $UserProductModel = new UserProductModel;
        $data = $UserProductModel->productUser($limit, $offset);
        $this->loadAdminView('adminmaster1', 'UserProduct/productUser', $data);
    }
    public function productUserInTrash($limit = LIMIT, $offset = 0)
    {
        $UserProductModel = new UserProductModel;
        $data = $UserProductModel->productUserInTrash($limit, $offset);
        $this->loadAdminView('adminmaster1', 'UserProduct/productUserInTrash', $data);
    }
    public function productUserTrash($userId)
    {
        $UserProductModel = new UserProductModel;
        $data = $UserProductModel->UserTrash($userId);
    }
    public function productTUserStatus($userId)
    {
        $UserProductModel = new UserProductModel;
        $data = $UserProductModel->UserStatus($userId);
    }
    public function AddUser()
    {
        if (isset($_POST['submit'])) {
            $userProductModel = new UserProductModel;
            $userProductModel->doAddUser();
        }
        $catModel = new AdminCategoryModel;
        $data['cats'] = $catModel->getAll(['trash' => 0, 'status' => 1]);
        $brandModel = new AdminBrandModel;
        $data['brands'] = $brandModel->getAll(['trash' => 0]);
        $this->loadAdminView('adminmaster1', 'UserProduct/Adduser', $data);
    }
}
