<?php 
 include "../configDB/config.php";
if(isset($_POST['product_id'])){  // update record //
    $product_id = $conn->real_escape_string($_POST['product_id']); 
    $cate_id = $conn->real_escape_string($_POST['cate_id']);    
    $prouct_name = $conn->real_escape_string($_POST['product_name']);
    $product_price = $conn->real_escape_string($_POST['product_price']);
    $selling_price = $conn->real_escape_string($_POST['selling_price']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $imgName = $_FILES["file"];
	$img = $_FILES["file"]["name"];
	$img_size = $_FILES["file"]["size"];
	$img_type = $_FILES["file"]["type"];
	$img_error = $_FILES["file"]["error"];
	$tmp_name =$_FILES["file"]["tmp_name"];
    // $exp = explode(".", $image_name);
	$location = "image/".$img;
    
    // if (file_exists($location)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    //   }else{

    // // move_uploaded_file($tmp_name,$location);
    // move_uploaded_file($tmp_name,$location);
    $short_disc = $conn->real_escape_string($_POST['short_disc']);
    $discrip = $conn->real_escape_string($_POST['discrip']);
    $meta_title = $conn->real_escape_string($_POST['meta_title']);
    $meta_discrip = $conn->real_escape_string($_POST['meta_discrip']);
    $meta_key = $conn->real_escape_string($_POST['meta_key']);
    $status = $conn->real_escape_string($_POST['status']);
  
    if($img == ""){

        $Sql = " UPDATE `product_tbl` SET `cate_id`= '$cate_id',`product_name`= '$prouct_name',`product_price`= '$product_price',`selling_price`= '$selling_price',`quantity`= '$quantity',`short_disc`= '$short_disc',`discrip`= '$discrip',`meta_title`= '$meta_title',`meta_discrip`= '$meta_discrip',`meta_key`= '$meta_key',`status`= '$status' WHERE `product_id`='$product_id' ";
        $exSql = $conn->query($Sql); 
            if($exSql){
                
                header("location: showProductModule.inc.php");
                
            }else{
                echo "data not get";
            }   
    }else{
        $Sql = " UPDATE `product_tbl` SET `cate_id`= '$cate_id',`product_name`= '$prouct_name',`product_price`= '$product_price',`selling_price`= '$selling_price',`quantity`= '$quantity', `file` = '$img',`short_disc`= '$short_disc',`discrip`= '$discrip',`meta_title`= '$meta_title',`meta_discrip`= '$meta_discrip',`meta_key`= '$meta_key',`status`= '$status' WHERE `product_id`='$product_id' ";
        
        $exSql = $conn->query($Sql);
        move_uploaded_file($tmp_name,$location);
        // echo '<img src = "'.$location.'<?php echo  $row["file"];?>" style="width:50px; height:40px;">';
    
        if($exSql){
           
            header("location: showProductModule.inc.php");
            die;
        }else{
            echo "data not get";
        }   
    }  
}

?>