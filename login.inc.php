<?php require 'indexHeader.inc.php';
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN'] == 'yes'){?>
  <script>
	  window.location.href = 'my_order.inc.php';
  </script>
<?php }
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(../admin/productModule/image/loginImg.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Login</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								 <!-- <form id="contact-form" action="#" method="post"> -->
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id = "email" placeholder="Your Email*" style="width:100%">
										</div>
										<span id ="email_error" class="field_eror " ></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id ="password" placeholder="Your Password*" style="width:100%">
										</div>
										<span id ="password_error" class="field_eror " ></span>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn" onclick = "loginForm()">Login</button>
										<!-- <p class ="field_error" id = "user_error mt-3"></p> -->
									</div>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
				



					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<!-- <form id="contact-form" action="#" method="post"> -->
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id = "name" placeholder="Your Name*" style="width:100%">
										</div>
										<span class="field_error " id= "name_errorr"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id ="email_add" placeholder="Your Email*" style="width:100%">
										</div>
										<span class="field_error " id = "email_er"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="number" id ="mobile" placeholder="Your Mobile*" style="width:100%">
										</div>
										<span class="field_error " id = "mobile_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id="password_id" placeholder="Your Password*" style="width:100%">
										</div>
										<span class ="field_error" id = "pasword_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="submit" class="fv-btn" onclick = "registerData()">Register</button>
										<p class ="field_error" id = "user_error mt-3"></p>
									</div>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
					
            </div>
        </section>
<?php require 'indexFooter.inc.php';?>
