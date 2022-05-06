<?php 
//error_reporting(0);
// define('SERVER_PATH' , '$_SERVER["DOCUMENT_ROOT"].'/rs_jwellery_shop/'');
//      define('ProductPath_' , '$_SERVER["DOCUMENT_ROOT"].'/rs_jwellery_shop/productModule/'');
     define('serverName','localhost');
     define('userName','root');
     define('password','');
     define('dbName','e-commerce_project');
    
     $conn = new mysqli(serverName,userName,password,dbName);
     if(!$conn){
         echo "error in connection";
     }
     
    
    

?>