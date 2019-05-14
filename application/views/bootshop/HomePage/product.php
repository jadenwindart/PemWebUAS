<ul class="thumbnails">
		
			<?php foreach($products as $product){?>
				<li class="span3">
				  <div class="thumbnail" >
					<a  href="product_details.html" style="text-align:center; "><img src="<?php echo base_url('assets/Prod_Img/'.$product['product_id'].".jpg")?>" alt="No Image Found" style="object-fit:contain; height:200px; width:200px;"/></a>
					<div class="caption">
					  <h5 style="height:60px; width:250px;"><?php echo $product['name']?></h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html" > <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo base_url('index.php/Cart/Add/'.$product['product_id'])?>">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered; margin-top:15px;">Rp.<?php echo $product['price']?></p></h4>
					</div>
				  </div>
				</li>
			<?php } ?>	
			  </ul>