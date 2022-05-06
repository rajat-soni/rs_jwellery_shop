<?Php include '../layoutModule/indexHeader.inc.php';?>

<div class= "container-fluid formcol">
    <div class="row">
            <div class="col-1"></div>
                <div class="col-10 ">
                    
                    <form method = "POST" action ="addUserData.inc.php">
                        <div class ="card mt-5 alert alert-dark" id = "formCol">
                           <div class="card-header"> <h3> ADD USER FORM</div>
                            <div class="card-body">
                                <div class="row">
                  
                                   
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>User Name</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="text"  name ="user_name" placeholder="Add Your Name here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>User Mobile </label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="number"  name ="mobile" placeholder="Add your Mobile No here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>User Email</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="email"  name ="email" placeholder="Add Your Email here.." class="form-control">
                                    </div>
                                </div>
                                <div class="row p-4">
                                    <div class="col-25">
                                    <label>Add on</label>
                                    </div>
                                    <div class="col-75 form-group">
                                        
                                        <input type="date"  name ="add_on"  class="form-control">
                                    </div>
                                    <input type = "submit" name="submit" value="submit" class="btn btn-danger">
                                
                                </div>
                               
                                
                                
                            </div>
                        </div>  
                        
                    </div>  
                </div>   
            </div>   
        </div>
    </div>                  
<?Php include '../layoutModule/indexFooter.inc.php';?>