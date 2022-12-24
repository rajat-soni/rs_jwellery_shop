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
    var password = $('#password').val();
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
                  email:email,
                  password:password
              },
            success: function(response) { 

                if (response == "inserted")
                {
                    alert('succesfully login');
                    window.location.href = 'index.inc.php';
                   
                }
                if (response == "exist")
                {
                    alert('please check credentials');
                    window.location.href = 'login.inc.php';
                }
           }
       });
    }
}


function add_to_cart(product_id,type){
    if(type == 'update'){

      var qty = $("#"+product_id+"qty").val();

    }else{

        var qty = $('#qty').val();
    }
    
    
    
        $.ajax({
              type: "POST",
              url: "manageCarte.php",
              data: {
                  product_id: product_id,
                  qty: qty,
                  type : type
              },
            success: function(result) { 
                if(type == 'update' || type == 'remove'){
                    window.location.href = 'cart.inc.php';
                    alert("cart successfully remove");
                }
                $(".htc__qua").html(result);
           }
       });
}



function check_out(product_id,type){
    if(type == 'update'){

      var qty = $("#"+product_id+"qty").val();

    }else{

        var qty = $('#qty').val();
    }
    
    
    
        $.ajax({
              type: "POST",
              url: "manageCarte.php",
              data: {
                  product_id: product_id,
                  qty: qty,
                  type : type
              },
            success: function(result) { 
                if(type == 'update' || type == 'remove'){
                    window.location.href = 'checkout.inc.php';
                    alert("cart successfully remove");
                }
                $(".htc__qua").html(result);
           }
       });
    
}


function checkInLogin(){
    var email = $('#email').val();
    var password = $('#password').val();
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
                  email:email,
                  password:password
              },
            success: function(response) { 

                if (response == "inserted")
                {
                    alert('succesfully login');
                    window.location.href = 'checkout.inc.php';
                   
                }
                if (response == "exist")
                {
                    alert('please check credentials');
                    window.location.href = 'login.inc.php';
                }
           }
       });
    }
}

function sort_product(cate_id){

    var sort_product_id = $("#sort_product").val();
    alert(sort_product_id);
    window.location.href = "http://localhost:3000/category.php?cate_id="+cate_id+"&sort="+sort_product_id;
}



