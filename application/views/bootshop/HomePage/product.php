<ul class="thumbnails">
		
			<?php foreach($products as $product){?>
				<li class="span3">
				  <div class="thumbnail" >
<<<<<<< HEAD
					<a  href="<?php echo base_url("index.php/Home/ProductDetail/".$product['product_id'])?>" style="text-align:center; "><img src="<?php echo base_url('assets/Prod_Img/'.$product['product_id'].".jpg")?>" alt="No Image Found" style="object-fit:contain; height:200px; width:200px;"/></a>
					<div class="caption">
					  <h5 style="height:60px; width:250px;">
							<?php
								if(strlen($product['name']) > 100) {
									$product_name = substr($product['name'], 0, 100)." . . .";
								}
								else {
									$product_name = $product['name'];
								}
								
								echo $product_name;
							?>
						</h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="<?php echo base_url("index.php/Home/ProductDetail/".$product['product_id'])?>" > <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo base_url('index.php/Cart/Add/'.$product['product_id'])?>">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered; margin-top:15px;">Rp.<?php echo $product['price']?></p></h4>
=======
					<a  href="product_details.html" style="text-align:center; "><img src="<?php echo base_url('assets/Prod_Img/'.$product['product_id'].".jpg")?>" alt="No Image Found" style="object-fit:contain; height:200px; width:200px;"/></a>
					<div class="caption">
					  <h5 style="height:60px; width:250px;"><?php echo $product['name']?></h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html" > <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo base_url('index.php/Cart/Add/'.$product['product_id'])?>">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered; margin-top:15px;">Rp.<?php echo $product['price']?></p></h4>
>>>>>>> master
					</div>
				  </div>
				</li>
			<?php } ?>	
			  </ul>