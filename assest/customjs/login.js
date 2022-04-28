
function loginForm(){
    var user_name = $("#username").val();
    var password = $("#password").val();
    
    if(user_name != "" && password != ""){
             
        $.ajax({

         url: '../loginLayout/loginData.php',
         type : 'POST',
         data : {username: user_name, password: password},
         success : function(response){
             if(response == 1){
                window.location = "../category/category.inc.php";
             }else if(response == 0){
                 alert("data not get");
             }    
         },

        });
        
    }else{

        alert("Please fil requrid field");
    }
    
}