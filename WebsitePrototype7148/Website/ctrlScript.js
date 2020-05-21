$(document).ready(function(){
    cat_list();
    products_list();
  
   
    
  function cat_list(){
      
    $.ajax({
        url:"action.php",
        method : "POST",
        data : {category:1},
        success : function(result){
          $("#cat_div").html(result);
        
     }
    })
    
  } 
    
 
    
 function products_list(){
    
   $.ajax({
       url:"action.php",
       method : "POST",
       data : {products:1,search:1},
       success : function(result1){
          $("#product_div").html(result1);
        
     }
    })
    
  } 
    

    

    
    
 $("body").on("click",".category",function(event){
    	event.preventDefault();
		var cid = $(this).attr('cid');
        $.ajax({url:"action.php", method : "POST", data : {categories:1,cat_id:cid}, success : function(result3){
          $("#product_div").html(result3);
        
     }
    })
	})	
    

    
    
    $("body").on("click",".each_product",function(event){
         var pid = $(this).attr('product_id'); 
         $.ajax({url:"DisplayProduct.php", method : "POST", data : {prod_id:pid}, success : function(result4){
          $("#product_div").html(result4);
        
     }
    })
    
    
    
   
    
   
}) 


	})