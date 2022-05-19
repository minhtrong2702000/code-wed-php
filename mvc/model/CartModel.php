<?php
class CartModel extends BaseModel
{
    public function checkout($Total)
    {
        $_SESSION['msg'] = '';
        $newCustomer['userId'] = 0;
        $newCustomer['fullName'] = $_POST['inputFullName'];
        $newCustomer['address'] = $_POST['inputAddress'];
        $newCustomer['phone'] = $_POST['inputPhone'];
        $newCustomer['email'] = $_POST['inputEmail'];
        $newCustomer['trash'] = 0;

        $customerModel = new CustomerModel;
        
        if (!$customerModel->insert($newCustomer)) $_SESSION['msg'] .= 'Lỗi trong quá trình xử lý đơn hàng ';
        //lấy id customer mới
        $sql = "select * from " . DB_PREFIX . 'customer order by customerId DESC';
        $customerId = $this->queryFirst($sql)['customerId'];

        $newOrder['customerId'] = $customerId;
        $newOrder['orderDate'] = date('Y-m-d H:i:s');
        $newOrder['total'] = $Total;
        $newOrder['note'] = $_POST['inputNote'];
        $newOrder['status'] = 1;
        $newOrder['trash'] = 0;

        $orderModel = new OrderModel;
        if (!$orderModel->insert($newOrder)) $_SESSION['msg'] .= 'Lỗi trong quá trình xử lý đơn hàng';
        //lấy id customer mới
        $sql = "select * from " . DB_PREFIX . 'order order by customerId DESC';
        $orderId = $this->queryFirst($sql)['orderId'];

        $OrderDetailModel = new OrderDetailModel;
        foreach ($_SESSION['cart'] as $k => $c) {
            $newOrderDetail['orderId'] = $orderId;
            $newOrderDetail['productId'] = $k;
            $newOrderDetail['Price'] = $c['Price'];
            $newOrderDetail['quantity'] = $c['quantity'];
            $newOrderDetail['trash'] = 0;
            if (!($OrderDetailModel->insert($newOrderDetail))) $_SESSION['msg'] .= 'Lỗi trong quá trình xử lý đơn hàng';
        }
        if ($_SESSION['msg'] == '') {
            $_SESSION['msg'] .= 'Đặt hàng thành công.';
            unset($_SESSION['cart']);
        }
    }
}
