<?php
class Cart extends UserController
{
    //them vao gio hang
    public function add($productID, $productname, $Price)
    {
        if (isset($_SESSION['cart']['productID'])) {
            $_SESSION['cart'][$productID]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$productID]['quantity'] = 1;
            $_SESSION['cart'][$productID]['productname'] = $productname;
            $_SESSION['cart'][$productID]['Price'] = $Price;
        }
        echo '<script>window.history.back();</script>';
    }
    //so luong san pham
    public function getCount()
    {
        $count = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $k=>$v)
                $count += $v['quantity'];
        }
        return $count;
    }
    //them
    public function getItems()
    {
        if (isset($_SESSION['cart'])) return $_SESSION['cart'];
        else return null;
    }
    public function getSupTotal($productID)
    {
        if (isset($_SESSION['cart'][$productID]))
            return $_SESSION['cart'][$productID]['Price'] * $_SESSION['cart'][$productID]['quantity'];
        else return 0;
    }
    public function getTotal()
    {
        $Total = 0;
        if (isset($_SESSION['cart']))
            foreach ($_SESSION['cart'] as $k => $v)
                $Total += $this->getSupTotal($k);
        return $Total;
    }
    public function remove($productID)
    {
        var_dump($productID);
        if (isset($_SESSION['cart'][$productID])) unset($_SESSION['cart'][$productID]);
        if (empty($_SESSION['cart'])) unset($_SESSION['cart']);
    }
    public function update()
    {
        foreach ($_POST as $productID => $quantity)
            if ($quantity == 0) $this->remove($productID);
            else
                $_SESSION['cart'][$productID]['quantity'] = $quantity;
        $_SESSION['update'] = true;
     
        //var_dump($_SESSION);
        echo '<script>window.history.back();</script>';
    }
    public function checkout()
    {
        if (isset($_POST['submit'])) {
            $cartModel = new CartModel();
            $cartModel->checkout($this->getTotal());
        }
        $this->loadView('master1', 'cart/checkout', []);
    }
}
?>