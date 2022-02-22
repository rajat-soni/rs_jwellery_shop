
function addCate(){
    var cate_name = $("#cate_name").val();
    var status = $("#status").val();
    
    if(cate_name != "" && status != ""){
             
        $.ajax({

         url :'addCateData.inc.php',
         type : 'POST',
         data : {cate_name: cate_name, status: status},
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