<?php
class Post extends UserController
{
    private $postModel;
    function __construct()
    {
        $this->postModel = new PostModel;
    }
    public function productPost($PostTitle)
    {
        $data = $this->pageModel->productPost($PostTitle);
        $this->loadView('master2', 'product/productPost', $data);
    }
}
