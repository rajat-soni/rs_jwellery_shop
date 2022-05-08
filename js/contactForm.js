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
                if (response)
                {
                    alert("Data submited");
                    window.location.href = 'index.inc.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
    }else{
        alert("Field must be filled");
    }
}

function loginForm(){
    var email = $('#email').val();

    var password = $('#password').val();
    
    
    
    
    if(email!= '', password!= '') {

        $.ajax({
            type: "POST",
            url: "contactData.php",
            data: {
                
                email: email,
                password: password
                
            },
            success: function(response) { 
                if (response)
                {
                    alert("Data submited");
                    window.location.href = 'index.inc.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
    }else{
        alert("Field must be filled");
    }
}