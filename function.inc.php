<?PHP  
//require 'admin/configDb/config.php';
function pr($arr){

    echo "<pre>";
    print_r($arr);
}

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die;
}

// function safe_mode($str){
//     if($str != ""){
// return real_escape_string($conn, $str);
//     }
// }

function getProductData($conn, $limit ='', $id ='') {

     $getProductSql = " SELECT * FROM `product_tbl` where `status` = 1 ";
    $res = array();
    
//     if($type == 'latest'){
//   $getProductSql .= " order by `product_id` desc ";
//     }
    if($limit != ''){
        $getProductSql .=" limit $limit ";
    }
    if($id != ""){
        $getProductSql .=" and `cate_id` = $id ";
    }
    $exeProductSql = $conn->query($getProductSql) or die("Error in Sql"); 
    while($result = $exeProductSql->fetch_array()){
        $res[]= $result;
        
        
    }  
    return $res;
    
}
function getProductCate($conn, $cate_id ='',$limit = '', $type) {
   
echo $getProductSql = " SELECT * FROM `product_tbl` where `status` = 1 ";
   $res = array();
   
    if($type == 'latest'){
  $getProductSql .= " order by `product_id` desc ";
    }
   
   if($cate_id != ""){
       $getProductSql .= " and `cate_id` = $cate_id ";
   }
   if($limit != ''){
    $getProductSql .= " limit $limit ";
}
   $exeProductSql = $conn->query($getProductSql) or die("Error in Sql"); 
   while($result = $exeProductSql->fetch_array()){
       $res[]= $result;
   
       
   }  
   return $res;
   
}


function getProductDetails($conn, $product_id ='', $limit = '') {
   
    $getProductSql = " SELECT `product_tbl`.*,`category_tbl`.`cate_name` FROM `product_tbl`,`category_tbl` where `product_tbl`.`status` = 1 ";
       $res = array();
       
    //     if($type == 'latest'){
    //   $getProductSql .= " order by `product_id` desc ";
    //     }
       
       if($product_id != ""){
           $getProductSql .= " and `product_id` = $product_id ";
       }
       if($limit != ''){
        $getProductSql .= " limit $limit ";
    }
    // echo $getProductSql;
       $exeProductSql = $conn->query($getProductSql) or die("Error in Sql"); 
       while($result = $exeProductSql->fetch_array()){
           $res[]= $result;
           
           
       }  
       return $res;
      
    }
   
    
?>
