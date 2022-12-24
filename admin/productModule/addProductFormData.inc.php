<?php include '../configDb/config.php';


if(isset($_POST['submit'])){
    // $cate_id = $_POST['product_id'];
    $cate_id = $conn->real_escape_string($_POST["cate_id"]);
   $product_name = $conn->real_escape_string($_POST["product_name"]);
    $product_mrp = $conn->real_escape_string($_POST["product_price"]);
    $selling_price = $conn->real_escape_string($_POST["selling_price"]);
    $quantity = $conn->real_escape_string($_POST["quantity"]);
     $file = $_FILES['file'];

    $targetDir = "image/";
    print_r($targetDir);
    $file = basename($_FILES["file"]["name"]);
    //print_r($file);
    $targetFilePath = $targetDir . $file;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        //print_r(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath));

    $short_disc = $conn->real_escape_string($_POST["short_disc"]);
    $discrip = $conn->real_escape_string($_POST["discrip"]);
    $meta_title = $conn->real_escape_string($_POST["meta_title"]);
   $meta_dis = $conn->real_escape_string($_POST['meta_discrip']);
   $meta_key = $conn->real_escape_string($_POST['meta_key']);
    $status = $_POST["status"];
    
     
        $runSql = " INSERT INTO `product_tbl`(`cate_id`, `product_name`, `product_price`, `selling_price`, `quantity`, `file`, `short_disc`, `discrip`, `meta_title`, `meta_discrip`, `meta_key`, `status`) VALUES ('$cate_id','$product_name','$product_mrp','$selling_price','$quantity','$file','$short_disc','$discrip','$meta_title','$meta_dis','$meta_key','$status')";
       $exSql = $conn->query($runSql) or die("error in sql");
      if($exSql){
          
         header("location:showProductModule.inc.php");
         die;
      }else{
          echo "<div class = 'alert alert-danger'>Please check the above details";
      }
    }else{
        echo "image not valid";
    }
}else{
    echo "file not get";
}

}else{
    echo "image not get";
}

// ?>
       