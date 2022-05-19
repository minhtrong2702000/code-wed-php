<?php
class Auth extends Controller
{
    public function adminLogin()
    {
        if (isset($_POST['login'])) {
            $authmodel = new AuthModel;
            $authmodel->adminLogin();
        }
        $this->loadView('master3', 'auth/login', []);
    }
   public function checkAdminLogin()
   {
       if (isset($_SESSION['username']) || ($_SESSION['level'] != 0)) {
           header('Location:' . BASE_URL . 'auth/login/');
           exit;
       }
   }
   public function AdminLogout()
   {
       if (isset($_SESSION['username'])) {
           unset($_SESSION['username']);
           unset($_SESSION['level']);
       }
       $this->loadView('master3', 'auth/LoginUser', []);
   }
    
}
