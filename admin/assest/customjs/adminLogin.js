function loginUser(){
    var user_name = $("#username").val();
    var password = $("#password").val();
    
    if(user_name != "" && password != ""){
             
        $.ajax({

         url: 'adminloginData.php',
         type : 'POST',
         data : {username: user_name, password: password},
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