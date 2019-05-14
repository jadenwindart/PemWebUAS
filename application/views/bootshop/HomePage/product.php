<ul class="thumbnails">
<style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>
		
			<?php foreach($products as $product){?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.html"><img class="zoom" src="<?php echo base_url('assets/Prod_Img/'.$product['product_id'].".jpg")?>" alt="No Image Found" width="70px" height="70px"/></a>
					<div class="caption">
					  <h5><?php echo $product['name']?></h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo base_url('index.php/Cart/Add/'.$product['product_id'])?>">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered;">Rp.<?php echo $product['price']?></p></h4>
					</div>
				  </div>
				</li>
			<?php } ?>	
			  </ul>