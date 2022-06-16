<?php
class PageModel extends BaseModel
{
    protected $table = DB_PREFIX . 'page';

    public function productPage($PageTitle)
    {
        $data['pages'] = $this->get(['title' => $PageTitle]);
        return $data;    

    }
}
?>