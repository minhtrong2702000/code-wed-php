<?php 
class OrderDetailModel extends BaseModel
{
    protected $table=DB_PREFIX.'orderdetail';
    protected $fieId=['orderId','productId','price','quantity','trash'];
    protected $key='orderDetailId';

}
?>