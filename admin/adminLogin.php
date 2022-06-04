
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
				<div class="col-md-7 mt-4" >
					<div  id="msg"></div>
						<div class="card shadow" style = " border-radius:  0px ;" id = "isCard">
							
							<div class="card-header ">
								<h3 class="text-left">Login-Form</h3>
								
							</div>
							<div class="card-body">
								
								<div class="form-group">
									<label class="pt-3 pb-3"><h4>Email</h4></label>
									<input type="text" name ="username" id="username" placeholder="User Email/UserName"  class="form-control">
								</div>
								<div class="form-group mb-3 mt-5">
									<label class="pt-3 pb-3"><h4>UserPassword</h4></label>
									<input type="password" name ="password" id="password" placeholder="User Password" class="form-control" >
								</div>
								
								<input type="submit" class="btn btn-danger btn-lg mt-5 mb-4" name="submit" onclick = "loginUser()" style = "border-radius : 0px;">
								
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