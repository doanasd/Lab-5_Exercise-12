<?php 
    function add_item($key, $quantity)
    {
        global $products;

        if($quantity < 1 )
        return;

        if(isset($_SESSION['cart12'][$key]))
        {
            $quantity += $_SESSION['cart12'][$key]['qty'];
            update_item($key, $quantity);
            return;
        }
        $cost = $products[$key]['cost'];
        $total = $cost * $quantity;
        $item = array('cost' => $cost, 'name' => $products[$key]['name'], 'qty' => $quantity, 'total' => $total);

        $_SESSION['cart12'][$key] = $item;
    }

    function update_item($key,$quantity)
    {
        $quantity = (int)$quantity;
        if(isset($_SESSION['cart12'][$key]))
        {
            if($quantity < 1)
            {
                unset($_SESSION['cart12'][$key]);
            }else{
                $_SESSION['cart12'][$key]['qty'] = $quantity;
                $_SESSION['cart12'][$key]['total'] = $_SESSION['cart12'][$key]['cost'] * $quantity;
            }
        }
    }

    function getsubtotal(){
        $total = 0;
        foreach($_SESSION['cart12'] as $key => $item)
        {
            $total += $item['total'];
        }
        $total = number_format($total,3);
        return $total;
    }
?>