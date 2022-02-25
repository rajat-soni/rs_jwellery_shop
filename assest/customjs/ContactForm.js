function contactForm(){
   var name = $("#name").val();
   //alert(name);
   var email = $("#email").val();
   //alert(email);
   var mobile = $("#mobile").val();
   //alert(mobile);
   var query = $("#query").val();
   //alert(query);

        if(name != "" && email != "" && mobile != "" && query != ""){

            $.ajax({
                url: '../contact_us.inc/contactData.inc.php',
                type : 'POST',
                data : {name:name, email:email, mobile:mobile, query:query},
                success : function(response){
                 if(response == 1){
                     alert("data Successfully Submitted");
                     window.location = "../contact_us.inc/indexContact.inc.php";

                 }else{
                     alert("data not get in ajax");
                 }
                },
            });
            
        }else{
            alert("Please fill required fields");
        }
}