<?Php include '../layoutModule/indexHeader.inc.php';?>

<div class= "container-fluid formcol mt-2 mb-0">
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
                                            <label><h5>User Name<h5></label>
                                        </div>
                                        <div class="col-75 form-group">
                                            <input type="text" class="inBox" name ="user_name" placeholder="Add Your Name here.." class="form-control" style ="border-radius: 0px;">
                                        </div>
                                    </div>
                                    <div class="row p-4">
                                        <div class="col-25">
                                            <label><h5>User Mobile</h5> </label>
                                        </div>
                                        <div class="col-75 form-group">
                                            <input type="number" class="inBox" name ="mobile" placeholder="Add your Mobile No here.." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row p-4">
                                        <div class="col-25">
                                            <label><h5>User Email</h5></label>
                                        </div>
                                        <div class="col-75 form-group">
                                            <input type="email" class="inBox"  name ="email" placeholder="Add Your Email here.." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row p-4">
                                        <div class="col-25">
                                            <label><h5>Add on</h5></label>
                                        </div>
                                        <div class="col-75 form-group">
                                            <input type="date" class="inBox" name ="add_on"  class="form-control">
                                            <input type = "submit" name="submit" value="submit" class="btn btn-danger btn-lg mt-5" >
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="card-footer ">&copy; Form reserved.</div>
                        </div>  
                    </form>  
                </div>   
            </div>   
            </div>
                         
<?Php include '../layoutModule/indexFooter.inc.php';?>