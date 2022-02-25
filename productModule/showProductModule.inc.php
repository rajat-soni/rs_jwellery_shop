<?php  include "../layoutModule/indexHeader.inc.php";?>
<?php  include "../configDB/config.php"; ?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
<?php 
$response[] = array();
$showSql = "SELECT `product_id`, `cate_id`, `product_mrp`, `selling_price`, `quantity`, `image`, `short_discrip`, `discrip`, `meta_title`, `meta_discrip`, `meta_keyword`, `status` FROM `product_tbl`";
$exSql = $conn->query($showSql) or die("error in sql table");

if($result = $exSql->num_rows > 0){
    while($row = $exSql->fetch_assoc()){
$response = $row;
    
    
?>

  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
<?php }
?>




<?php  include "../layoutModule/indexFooter.inc.php";?>