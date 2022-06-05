function isForgetPass() {

    var admin_email = $("#admin_email").val();
     $("#isErorr").html("");
    
    if(admin_email == "") {

        $("#isErorr").html("Please enter your admin email..");
        
    }else{
        $("#isBtn").html("Please wait....");
        $("#isBtn").attr('disabled', true);

        $.ajax({
            url: 'isForgetPassData.inc.php',
            type : 'POST',
            data : {admin_email: admin_email},
            success : function(response){
                if(response){
                   
                    var email = $("#admin_email").val('');
                    $("#isErorr").html(response);
                    $("#isBtn").html('Password Send');
                    $("#isBtn").attr('disabled', false);
                    
                    
                   

                }else {
                    $("#isErorr").html("Erorr in Sending Recovring Password");
                }
                
                
            },
   
        });
           
    }
}