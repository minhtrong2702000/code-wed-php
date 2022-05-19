<?php
class Page extends UserController
{
    private $pageModel;
    function __construct()
    {
        $this->pageModel = new PageModel;
    }
    public function productPage($PageTitle)
    {
        $data = $this->pageModel->productPage($PageTitle);
        $this->loadView('master2', 'product/productPage', $data);
    }
}
