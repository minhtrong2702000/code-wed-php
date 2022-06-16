<?php
class AdminCategoryModel extends CategoryModel{
    protected $fields=['catName','alias','parentId','trash','status'];
    protected $key='catId';
}

?>