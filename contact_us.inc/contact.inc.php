<?Php include '../layoutModule/indexHeader.inc.php';?>


<div class="container ">
    <div class="row mt-4   bg-light" >
   
          <div class="col-md-5" style="margin-top: -1px; margin-left:-12px;" >
          <img src="../assest/imgfolder/contactImg.jpg" style="height:100%; width:98%; background-size:contain;"  alt="Avatar Logo"/>
          </div>
              <div class="col-md-7 bg- mt-4 mb-4 p-4">
                  <div class="row p-2">
                      <div class="col-25 ">
                          <label for="fname">Visitor Name</label>
                      </div>
                      <div class="col-75">
                          <input type="text" id="name" name="name" placeholder="Add your Visitor Name here..">
                      </div>
                  </div>
                  <div class="row p-2">
                      <div class="col-25">
                          <label for="email">Visitor Email</label>
                      </div>
                      <div class="col-75">
                          <input type="text" id="email" name="email" placeholder="Write your Email here..">
                      </div>
                  </div>
                  <div class="row p-2">
                      <div class="col-25">
                          <label for="mobile no">visitor Mobile no</label>
                      </div>
                      <div class="col-75">
                          <input type="text" id="mobile" name="mobile" placeholder="Add your Category here..">
                      </div>
                  </div>
                  <div class="row p-2">
                      <div class="col-25 pl-4">
                          <label for="fname">Query</label>
                      </div>
                      <div class="col-75">
                      <textarea placeholder="Type your message or Query here..." tabindex="20" required name="query" id="query" class="form-control"></textarea>
                      <input type="submit" name="submit" class="btn btn-success btn-md mt-2" class="form-control" onclick = "contactForm()" >
                      </div>
                      

                  </div
                  
            </div>
      </div>
</div>

        
<?Php include '../layoutModule/indexFooter.inc.php';?>