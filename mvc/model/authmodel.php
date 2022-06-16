<?php
class AuthModel extends BaseModel
{
    protected $table = DB_PREFIX . 'admin';
    public function AdminLogin()
    {
        //hung du lieu
        if ($_POST['login']) {
            if ($_POST['inputUsername']) $username = $_POST['inputUsername'];
            if ($_POST['inputPassword']) $password = md5(md5($_POST['inputPassword']));
        }
        //lay du lieu
        $authModel = new AuthModel;
        $u = $authModel->get(['username' => $username, 'level' => 0, 'trash' => 0]);
        if ($u['pass'] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $u['level'];
            header('Location:' . BASE_URL . 'dashboard/home');
            exit;
        }
         else
        {
            var_dump(['msg']);
            $_SESSION['msg'] = "Sai UserName hoặc Password.";
            header('Location:' . BASE_URL . 'auth/AdminLogin/');
            exit;
        }
    }
    
}
