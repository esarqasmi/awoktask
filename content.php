 

<div id="matches" style="height:70px; overflow-y:hidden; white-space:pre"></div>
   <!-- Product-item start -->
   <section id="product-grid-sidebar">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <div class="single category">
                        <h3 class="side-title">Category</h3>
                        <ul class="list-unstyled">
                        <li> <button type="button" id="clear" class="btn btn-success" style="margin:7px">Clear JSON File</button></li>

                            <li><a href="#" title="">fashion & Lifestyle <span class="pull-right">158</span></a></li>
                            <li><a href="#" title="">electronics <span class="pull-right">129</span></a></li>
                            <li><a href="#" title="">sports & games <span class="pull-right">155</span></a></li>
                            <li><a href="#" title="">bag & shoes <span class="pull-right">169</span></a></li>
                            <li><a href="#" title="">health & beauty <span class="pull-right">108</span></a></li>
                            <li><a href="#" title="">accesorries <span class="pull-right">209</span></a></li>
                            <li><a href="#" title="">digital software <span class="pull-right">209</span></a></li>
                            <li><a href="#" title="">camera<span class="pull-right">155</span></a></li>
                            <li><a href="#" title="">watches<span class="pull-right">168</span></a></li>
                            <li><a href="#" title="">mobile phones<span class="pull-right">170</span></a></li>
                            <li><a href="#" title="">sunglass<span class="pull-right">180</span></a></li>
                        </ul>
                   </div>
                    
                    
                    
                    
               </div>
               <div class="col-md-9">
                  <div class="pro-grid-sidebar col-md-12">
                       
                           
                              <form action="">
                              <div class="col-md-9">
                              <input type="text" class="form-control searchinput" id="searchinput" placeholder="Search.." name="search">
                              </div>
                              <div class="col-md-2">
                              <button type="button" id="search" class="btn btn-success" style="margin:7px">Search</button>
                            </div>
                            <div class="col-md-1"><img src="images/spinner.gif" style="display:none" width="50px" id="spinner"/></div>
                            </form>
                           
                   
                        
                   </div>
                   <!-- product list -->
                    
                   <div class="product-list-main" id="product-list-main">
                     
                       <div class="clearfix"></div>
                         
                        <?php
						$obj=new LoadFile();
						$json_a = $obj->get_content(); 
							if(!empty($json_a)){ 
							foreach($json_a  as $items){
							  foreach($items  as $item){
								if(isset($item['name'])){
								  ?> 
                       <div class="product-list-view">
                           <div class="gallery_product col-md-4 pl col-sm-6">
                                <div class="featured-product">
                                    <a href="<?php echo isset($item['href'])  ? $item['href'] : '#' ?>" target="_blank"><img src="<?php echo isset($item['image_url'])  ? $item['image_url'] : 'Title not found' ?>" alt="featured-product-img" class="img-responsive"></a>
                                     
                                </div>
                           </div>
                           <div class="product-details col-md-8 col-sm-6">
                              <h3><?php echo isset($item['name'])  ? $item['name'] : 'Title not found' ?></h3>
                               
                              <h5><?php echo isset($item['price'])  ? $item['price'] : 'Price not found' ?></h5>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidt ut labore et dolore magna aliqua.</p>
                               
                           </div>
                       </div>
                       <div class="clearfix"></div>
                       <?php }
					   
					    } 
					    } 
						 }else{
							 echo '<p> Search keyword to fill the json file </p>';
							 }
					   ?>
                        
                        
                        
                   </div>
                <!-- product list -->
                     
                   <div class="clearfix"></div>
                   
               </div>
           </div>
       </div>
   </section>
  <!-- Product-item end -->  
    