
<?php include '../function.inc/function.inc.php';
session_start();
if(!isset($_SESSION['ADMIN_LOGIN'])){?>
	<script>
		window.location.href = '../adminLogin.php';
	</script>
 <?php } ?>  
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rs Jweller's DashBord</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/spacelab/bootstrap.min.css" integrity="sha384-F1AY0h4TrtJ8OCUQYOzhcFzUTxSOxuaaJ4BeagvyQL8N9mE4hrXjdDsNx249NpEc" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assest/customcss/custom.css">
  <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="../assest/customcss/addForm.css">

<!-- <link rel="stylesheet" href="../assest/customcss/admin.css"> -->
<link rel="stylesheet" href="../assest/customcss/contactForm/contactForm.css">
<link rel="stylesheet" href="../assest/customcss/slide.css">




</head>

<body id="grad">

  <div class="d-flex " class="shadow" id="wrapper">

    <!-- Sidebar -->
    <div class=" t " class="shadow" id="sidebar-wrapper">
    <a class="navbar-brand pl-5 pt-0 " href="#">
   
      <img src="../assest/imgfolder/adminImg.png" alt="Avatar Logo" style="width:50px; margin-left: 50px; margin-top: 25px;" class="rounded-pill"> 
    </a>
   
  
      <div class="list-group list-group-flush pl-2 pt-4 " id=" isVerticalDrwer">
        
        <a href="../index.php" class="list-group-item list-group-item-action  text-center ">Dashboard </a>

        <a href="../category/indexCategory.inc.php" class="list-group-item list-group-item-action pt-4   text-center">Category Master </a>

        <a href="../productModule/showProductModule.inc.php" class="list-group-item list-group-item-action  pt-4   text-center">Product Master</a>

        <a href="../order/showOrderMster.inc.php" class="list-group-item list-group-item-action pt-4  text-center">Order Master </a>

        <a href="../userModule/addUser.inc.php" class="list-group-item list-group-item-action pt-4   text-center">User Master </a>

        <a href="../contact_us.inc/indexContact.inc.php" class="list-group-item list-group-item-action  pt-4   text-center">Contact Us </a>
      

        <a href="../adminLogin.php" class="list-group-item list-group-item-action  pt-4  text-center">Logout </a>
          
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg- border-bottom shadow">
        <button class="btn btn- mt-3 mb-3" id="menu-toggle" id ="slidBtn">Slid left</button>

        <button class="navbar-toggler" type="submit" data-toggle="collapse" id ="isSlidBtn" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
             <a class="nav-link text-dark mt-3 mb-3" href="#">Welcome to Admin</span></a></p>
           
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-dark mt-3 mb-3" href="../adminLogin.php">Logout <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
            <a class="navbar-brand pl-5 pt-0" href="#">
              <img src="../assest/imgfolder/adminImg.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill"> 
            </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> - -->
           
          </ul>
        </div>

      </nav>