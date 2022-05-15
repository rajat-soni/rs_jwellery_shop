<?php require 'admin/configDb/config.php';
      require 'add_to_card.inc.php';
      require 'function.inc.php';
//    print_r($_POST);
//    die;
        $product_id = $_POST['product_id']; 
        $qty = $_POST['qty'];
        $type = $_POST['type'];
        $obj = new add_to_card();
    //    print_r($obj->add_product($product_id, $qty));

        if($type == 'add'){
             $obj->add_product($product_id, $qty);
        }

        if($type == 'update'){
            $obj->update_cart($product_id,$qty);
       }

       if($type == 'remove'){
        $obj->remove_cart($product_id);
   }

        echo $obj->total_product();
			

    ?>