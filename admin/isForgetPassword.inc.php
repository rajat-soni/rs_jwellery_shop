<?php require 'loginHeader.inc.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
                <div class=" col-md-8 col-sm-12 col-lg-8 mt-4">
                <div class="card shadow" id = "isForgetForm">

                    <h3 class="card-header ">Forget Password </h3>
                    
                    
                    <div class="card-body">
                    
                        <lable><h4 class="pt-4 pb-4">Forget Password</h4></label>   
                        <input type ="email"  id ="admin_email" class="form-control" class=" mb-4" placeholder = "Please Enter Your Recovery Eamil Id">
                        <span id = "isErorr"></span>
                        <!-- <input type = "submit" name = "submit" style='font-size:24px' id ="isSubmit">  -->
                        
                        <button  type = "submit" id ="isBtn" onclick = "isForgetPass()">Password Send<i class='fas fa-user-lock' style = "margin-left:20px;"></i></button>
                        
                    </div>
                    <div class="card-footer"><a href = "adminLogin.php" ><h4 style="paddib=-top: 20px;">Login Page </h4></a></div>
                </div>
            
                </div>
            
            <div class="col-md-2"></div>   
        </div>
    </div>    
<?php require 'loginFooter.inc.php';?>

<!-- <div class="col-md-8 col-sm-8 col-xl-8 col-lg-8">
                <div class="card">
                    <h5 class="card-header">Forget Password</h5>
                    <div class="card-body">
                        <lable><h4>Forget Password</h4></label>   
                        <input type ="text" name ="isForgetPass" class="form-control">
                        <input type ="submit" name ="submit" class="btn btn-lg"id="isSubmit">
                    </div>
                </div>
            </div>
</div> -->