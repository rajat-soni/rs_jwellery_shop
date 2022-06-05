
<?php include "loginHeader.inc.php";
session_start();
if(!isset($_SESSION['ADMIN_LOGIN'])){
  header('loaction:adminLogin.php');
}
?>

	<div  class="container">
	 
		<div class="container mt-4 mb-5">
			<div class="row">
				<div class="col-md-2">
				
				</div>
				<div class="col-md-7 mt-4" id = "isLoginForm" >
					<div  id="msg"></div>
						<div class="card shadow" style = " border-radius:  0px ;" id = "isCard">
							
							<div class="card-header ">
								<h3 class="text-left">Login-Form</h3>
								
							</div>
							<div class="card-body">
								
								<div class="form-group">
									<label class="pt-3 pb-3"><h4>Admin Email</h4></label>
									<input type="email" name ="user_email" id="user_email" placeholder="Plase Fill Admin Email"  class="form-control">
								</div>
								<div class="form-group mb-3 mt-4">
									<label class="pt-3 pb-3"><h4>Admin Password</h4></label>
									<input type="password" name ="password" id="password" placeholder="User Password" class="form-control" >
								</div>
								<div class="row">
  									<div class="col pt-4">
	 									<div class="form-check" style="margin-left:20px;">
											
      										<input class="form-check-input" type="checkbox" id="inlineFormCheck">
      										<h4 class="pl-3">Remember me</h4>
      										
    									</div>
  									</div>
									<div class="col pt-4" style="margin-left:41%;">
	  									<a href = "isForgetPassword.inc.php" ><h4 style="margin-right:px;">Forget Password </h4></a>
  									</div>
										  
								</div>
									
									<input type="submit" class="btn   btn-lg mt-4 mb-4" name="submit" value= "submit" onclick = "loginUser()" style = "; margin-right: 20px;"  id ="isSubmit">
							</div>
                            <div class="card-footer">
							<h5 class ="mr-1 text-mute  ">&copy; All Rights Reseved By Rj.com</h5>
							</div>
						</div>
					</form>
				</div>
				      <div class="col-md-2">
				</div>
				
				<div  id="response"></div>
			</div>
			
		</div>
		
	</div>


<?php include 'loginFooter.inc.php'; ?>