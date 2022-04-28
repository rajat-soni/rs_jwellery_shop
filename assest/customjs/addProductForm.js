function addProductForm(){
    var product_id = $("#product_id").val();
    alert(product_id)
    var cate_id = $("#cate_id").val();
    alert(cate_id)
    var product_name = $("#product_name").val();
    alert(product_name)
    var product_mrp = $("#product_mrp").val();
    alert(product_mrp)
    var selling_price = $("#selling_price").val();
    alert(selling_price)
    var quantity = $("#quantity").val();
    alert(quantity)
     var Image = $("#Image").val();
     alert(Image)
    var short_discrip = $("#short_discrip").val();
    alert(short_discrip)
    var Discription = $("#discrip").val();
    alert(Discription)
    var meta_title = $("#meta_title").val();
    alert(meta_title)
    var meta_discrip = $("#meta_discrip").val();
    alert(meta_discrip)
    var meta_keyword = $("#meta_keyword").val();
    alert(meta_keyword)
    var status = $("#status").val();
    alert(status)
   


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
}