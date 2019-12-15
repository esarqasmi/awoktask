var adata = '';
$('#search').click(function(){
	$('#spinner').show();
var keyword = $('#searchinput').val();
    $.ajax({
   type: "POST",
   data: {keyword:keyword},
   url: "regulator/ajaxhandler.php",
   success: function(response){ 
	$('#spinner').hide(); 
	 if(response){  
	   var obj = JSON.parse(response);
	   
    $('#product-list-main').empty();
  var html = '';
	$.each(obj, function(key,val){ 
	if(val.name !=null){

    html +='<div class="product-list-view"> <div class="gallery_product col-md-4 pl col-sm-6"> <div class="featured-product"> <a href="#" target="_blank"><img src="'+val.image_url+'" alt="featured-product-img" class="img-responsive"></a> </div> </div> <div class="product-details col-md-8 col-sm-6"> <h3>'+val.name+'</h3> <h5>'+val.price+'</h5> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerion ullco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>  </div> </div>';
  html +='<div class="clearfix"></div>'; 
	}
    });  
                       
    $('#product-list-main').append(html);
			  
	 
		 }
	 
   },
      error: function (xhr, ajaxOptions, thrownError) {
        if(xhr.status){
			  alert("Oops! Some technical error occured.");
			}
       
      }
}); 



 
}); 
 /*Cleaning json file*/
 
$('#clear').click(function(){
    $.ajax({
   type: "POST",
   data: {clear:true},
   url: "regulator/ajaxhandler.php",
   success: function(results){ 
	$('#spinner').hide(); 
	 if(results){  
	 //get json file 
	 location.reload(); 
		 }else{
			 alert("File could not be cleared. Clear it manually");
			 }
	 
   },
      error: function (xhr, ajaxOptions, thrownError) {
        if(xhr.status){
			  alert("Oops! Some technical error occured.");
			}
       
      }
	});
	});
 