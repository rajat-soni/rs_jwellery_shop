<?php

//PHP program to create 
// Numeric multidementional array multidimensional array

// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );
//   foreach($cars as $list){
//       foreach($list as $value){
//           echo $value."<br>";
//       }
//   }
//   echo "<pre>";
//   print_r($cars);

// $cars = array (
//   array("Volvo",22,18),
//   array("BMW",15,13),
//   array("Saab",5,2),
//   array("Land Rover",17,15)
// );
    
// for ($row = 0; $row < 4; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cars[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }

//Traversing PHP Associative Array.. 

// $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  
// foreach($salary as $k => $v) {  
// echo "Key: ".$k." Value: ".$v."<br/>";  
//}
//  associative multidimentional array 
 $lanhushr['cart']['mar']['shweta'] = array("rajat"=>24);
//  $lanhushr = array("rajat"=>22);

//  $lanhushr = array(
//    "cart"=>( array(
//    "shweta"=>array("amar"=>array
// ("mohan"=>"real"
// ),
// ),
//    )
//     ),
//  );
 echo"<pre>";
 print_r($lanhushr);

//  $languages['cart']['0'] = "amar";
//  foreach($languages as $key=>$data){
//    echo $key." value of key <br/>";
//    foreach($data as $imp=>$val){
//     echo $imp."value of imp <br/>";
//      foreach($val as $rest){
//       echo $rest."<br/>";
//      }
     
//    }
//  }
//  echo "<pre>";
//  print_r($languages);
  
//  $languages['Python'] = array(
//      "first_release" => "1991", 
//      "latest_release" => "3.8.0", 
//      "designed_by" => "Guido van Rossum",
//      "description" => array(
//          "extension" => ".py", 
//          "typing_discipline" => "Duck, dynamic, gradual",
//          "license" => "Python Software Foundation License"
//      )
//  );
//  echo"<pre>";
 
//    print_r($languages);

//    echo"</pre> </br>";
//  foreach ($languages as $key => $value) {
//      echo $key . "</br>";
//      foreach ($value as $sub_key => $sub_val) {
                   
//          // If sub_val is an array then again
//          // iterate through each element of it
//          // else simply print the value of sub_key
//          // and sub_val
//          if (is_array($sub_val)) {
//              echo $sub_key . " : \n";
//              foreach ($sub_val as $k => $v) {
//                  echo "\t" .$k . " = " . $v . "</br>";
//              }
//          } else {
//              echo $sub_key . " = " . $sub_val . "\n";
//          }
//      }
//  }
   
?>