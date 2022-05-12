function sendMsg(){
    var name = $('#name').val();

    var email = $('#email').val();
    
    var mobile = $('#mobile').val();

    var query = $('#query').val();
    alert(query);
    
    
    if(name!= '', email!= '', mobile != '', query != '') {

        $.ajax({
            type: "POST",
            url: "loginData.php",
            data: {
                name: name,
                email: email,
                mobile: mobile,
                query: query
            },
            success: function(response) { 
                if (response == 'email exist')
                {
                   
                    $("#user_error").html('email exist');
                    window.location.href = 'login.inc.php';
                   
                }
                if(response == 'inserted')
                {
                    $("#user_error").html('data submitted');
                    window.location.href = 'login.inc.php'; 
                }
           }
       });
    }else{
        alert("Field must be filled");
    }
}



function loginForm(){
    var email = $('#email').val();
    alert(email);
    var password = $('#password').val();
alert(password);
    var error_msg = $('.field_eror').html('');
    var is_error = '';

    if(email== '') {
        $('#email_error').html("enter your email");
       is_error = 'yes';
    }
    if(password== '') {
        $('#password_error').html("enter your password");
       is_error = 'yes';
    }
    if(is_error == ''){
        $.ajax({
              type: "POST",
              url: "loginData.php",
              data: {
                  email: email,
                  password: password
              },
            success: function(response) { 

                if (response == 'inserted')
                {
                    alert('succesfully login');
                    window.location.href = 'index.inc.php';
                   
                }
                else
                {
                    alert('please check credentials');
                    window.location.href = 'login.inc.php';
                }
           }
       });
    }
}

