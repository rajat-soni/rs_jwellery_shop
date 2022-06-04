function addProductForm(){
    var product_id = $("#product_id").val();
   
    var cate_id = $("#cate_id").val();
   
    var product_name = $("#product_name").val();
   
    var product_mrp = $("#product_mrp").val();

    var selling_price = $("#selling_price").val();

    var quantity = $("#quantity").val();
    
     var Image = $("#Image").val();
     
    var short_discrip = $("#short_discrip").val();
    
    var Discription = $("#discrip").val();
    
    var meta_title = $("#meta_title").val();
    
    var meta_discrip = $("#meta_discrip").val();
    
    var meta_keyword = $("#meta_keyword").val();
    
    var status = $("#status").val();

   


    $.ajax({

        url: '../productModule/addProductFormData.inc.php',
        type : 'POST',
        // data : $('#form_id').serialize(),
        data : {product_id:product_id, cate_id:cate_id, product_name:product_name, product_mrp:product_mrp,selling_price:selling_price, quantity:quantity, Image:Image, short_discrip:short_discrip, Discription:Discription,meta_title:meta_title,meta_discrip:meta_discrip,meta_keyword:meta_keyword,status:status},
        success : function(response){
             if(response == 1){
                 window.location = '../productModule/showProductModule.inc.php'
             }else{
               alert("Data is not submitted")
             }
        },

    });
   
}
