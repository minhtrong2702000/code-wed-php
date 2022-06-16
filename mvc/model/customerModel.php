<?php 
class CustomerModel extends BaseModel
{
    protected $table=DB_PREFIX.'customer';
    protected $fieId=['userId','fullName','address','phone','email','trash'];
    protected $key='customerId';
}
?>