<?php
class UserProductModel extends UserModel
{
    protected $table = DB_PREFIX . 'user';
    protected $fieId = ['userName', 'fullname', 'pass', 'email','trash', 'status'];
    protected $key = 'userId';
  
    public function productUser($limit, $offset)
    {
        $data['products'] = $this->getAllLimit(['trash' => 0], $limit, $offset);
        $totalRecords = count($this->getAll(['trash' => 0]));
        $data['paging'] = new paging('UserProduct/productUser/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function productUserInTrash($limit, $offset)
    {
        $data['products'] = $this->getAllLimit(['trash' => 1], $limit, $offset);
        $totalRecords = count($this->getAll(['trash' => 1]));
        $data['paging'] = new paging('UserProduct/productUserInTrash/', $totalRecords, $limit, $offset);
        return $data;
    }
    public function UserTrash($userId)
    {
        if ($this->toggle('trash', $userId))
            $_SESSION['msg'] = "Thuc hien thanh cong";
        else
            $_SESSION['msg'] = "Thuc hien that bai";
        header('location:' . BASE_URL . 'UserProduct/productUser/' . LIMIT . '/0');
    }
    public function UserStatus($userId)
    {
        if ($this->toggle('status', $userId))
            $_SESSION['msg'] = "Thuc hien thanh cong";
        else
            $_SESSION['msg'] = "Thuc hien that bai";
        header('location:' . BASE_URL . 'UserProduct/UserProduct/' . LIMIT . '/0');
    }
    public function doAddUser()
    {
        $newPro['username'] = $_POST['inputUserName'];
        $newPro['fullname'] = $_POST['inputFullName'];
        $newPro['pass'] = $_POST['inputPass'];
        $newPro['email'] = $_POST['inputEmail'];
        $newPro['trash'] = 0;
        $newPro['status'] = $_POST['inputStatus'];

        $helper = new Helper;
        if ($newPro['pass'] == '') $newPro['pass'] = $helper->to_alias($newPro['username']);
        $_SESSION['msg'] = '';
                if ($this->insert($newPro)) $_SESSION['msg'] .= 'Thêm sản phẩm thành công.';
                else
                    $_SESSION['msg'] .= 'Thêm sản phẩm thất bại.';
            }
        }
?>