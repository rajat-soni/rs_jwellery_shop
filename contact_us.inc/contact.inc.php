<?php 
include '../layoutHeader.php';
?>
<div class="container" id ="wraperCon">
    <div id="contactus" >
        <h3>Contact us form</h3>
        <fieldset> <input placeholder="Visitorname" type="text" tabindex="1" required autofocus name="name" id="name" class="form-control"> </fieldset>

        <fieldset> <input placeholder="Visitor Email Address" type="email" tabindex="2" required name="email" id ="email" class="form-control"> </fieldset>

        <fieldset> <input placeholder="Visitor Phone Number" type="tel" tabindex="3" required name="mobile" id = "mobile" class="form-control"> </fieldset>

        <fieldset> <textarea placeholder="Type your message or Query here..." tabindex="5" required name="query" id="query" class="form-control"></textarea> </fieldset>
        
        <fieldset> <button name="submit" type="submit" id="contactus-submit"  onclick = "contactForm()" data-submit="...Sending"></i> Send Now</button> </fieldset>
   
</div>
<?php 
include '../layoutfooter.php';
?>