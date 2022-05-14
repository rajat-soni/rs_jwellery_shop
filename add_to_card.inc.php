<?php 
session_start();
class add_to_card{
    
    function add_product($product_id,$qty) {
     
        $_SESSION['cart'][$product_id]['qty'] = $qty;
    }

    function updateCart($product_id,$qty) {

        if(isset($_SESSION['cart'][$product_id])){

            $_SESSION['cart'][$product_id]['qty'] = $qty;
        }

    }

    function removeCart($product_id) {

        if(isset($_SESSION['cart'][$product_id])){
            unset($_SESSION['cart'][$product_id]);
        }
    }

    function emptyCart($product_id) {

        unset($_SESSION['cart']);
    }

    function total_product() {

        if(isset($_SESSION['cart'])){
            return count($_SESSION['cart']);
        }else{
            return 0;
        }
    }
}


?>