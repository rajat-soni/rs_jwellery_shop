<?php 


     define('serverName','localhost');
     define('userName','root');
     define('password','');
     define('dbName','e-commerce_project');
    
     $conn = new mysqli(serverName,userName,password,dbName);
     if(!$conn){
         echo "error in connection";
     }
     
     define('SERVER_PATH' , '$_SERVER["DOCUMENT_ROOT"].'/rs_jwellery_shop/');
     echo serverPath;

?>