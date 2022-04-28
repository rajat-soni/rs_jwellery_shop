
function addCate(){
    var cate_name = $("#cate_name").val();
    var status = $("#status").val();
    
    if(cate_name != "" && status != ""){
             
        $.ajax({

         url :'../category/addCateData.inc.php',
         type : 'POST',
         data : {cate_name: cate_name, status: status},
         success : function(response){
             if(response == 1){
                window.location = "../category/indexCategory.inc.php";
             }else if(response == 0){
                 alert("Data not get");
             }    
         },

        });
        
    }else{

        alert("Please fil requrid field");
    }
    
}