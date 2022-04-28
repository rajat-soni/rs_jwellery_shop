
<?php include "../layoutModule/indexHeader.inc.php"; ?>
	<div  class="container">
	 
		<div class="container mt-4">
			<div class="row">
				<div class="col-md-2">
				
				</div>
				<div class="col-md-7 mt-4" >
					<div  id="msg"></div>
						<div class="card">
							
							<div class="card-header btn-primary">
								<h4 class="-center"><cite><span class="text-light">Login-Form</h4>
								
							</div>
							<div class="card-body">
								
								<div class="form-group">
									<label class="pt-3 pb-3">Email</label>
									<input type="text" name ="username" id="username" placeholder="User Email/UserName"  class="form-control">
								</div>
								<div class="form-group mb-3 mt-4">
									<label class="pt-3 pb-3">UserPassword</label>
									<input type="password" name ="password" id="password" placeholder="User Password" class="form-control">
								</div>
								
								<input type="submit" class="btn btn-danger btn-md mt-4 mb-4" name="submit" onclick = "loginForm()"></button> 
								<input type="reset" class="btn btn-primary btn-md mt-4 mb-4" name="reset" ></button> 
							</div>
							<div class="card-footer btn-primary">
								
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


<?php include '../layoutModule/indexFooter.inc.php'; ?>