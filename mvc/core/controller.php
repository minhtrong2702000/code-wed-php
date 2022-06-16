<?php
class Controller{
    public function home()
    {
        echo"day la trang home";
    }
    protected function loadView($master,$viewName,$data){
        require_once PATH_TO_VIEW.strtolower($master).'.php';
    }
}
?>