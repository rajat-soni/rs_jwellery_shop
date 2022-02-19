<?php 


     define('serverName','localhost');
     define('userName','root');
     define('password','');
     define('dbName','e-commerce_project');
    
     $conn = new mysqli(serverName,userName,password,dbName);
     if(!$conn){
         echo "error in connection";
     }
     

?>