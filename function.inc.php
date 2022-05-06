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

function getProductData($conn, $type = '', $limit = '' ){

     $getProductSql = " SELECT * FROM `product_tbl` ";
    $res = array();
    if($type == 'latest'){
  $getProductSql .= " order by `product_id` desc ";
    }
    if($limit != ''){
        $getProductSql .= " limit  $limit ";
    }
    $exeProductSql = $conn->query($getProductSql) or die("Error in Sql"); 
    while($result = $exeProductSql->fetch_array()){
        $res[]= $result;
        
        
    }  
    return $res;
    
}

?>
