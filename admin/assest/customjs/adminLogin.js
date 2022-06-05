function loginUser(){
    var user_email = $("#user_email").val();
    var password = $("#password").val();
    
    if(user_email != "" && password != ""){
             
        $.ajax({

         url: 'adminloginData.php',
         type : 'POST',
         data : {user_email : user_email, password: password},
         success : function(response){
             if(response == 1){
                window.location = "category/indexCategory.inc.php";
             }else if(response == 0){
                 alert("data not get");
             }    
         },

        });
        
    }else{

        alert("Please fil requrid field");
    }
    
}