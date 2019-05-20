<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
	<!-- <div class="well well-small"><a id="myCart" href="<?php echo base_url('index.php/Home/Cart')?>"><img src="<?php echo base_url('/assets/themes/images/ico-cart.png')?>" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div> -->
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<?php
			foreach($allCategory as $row) {
				echo "<li><a href='".base_url('index.php/Home/Category/'.$row['cat_id'])."'>".$row['category']."</a></li>";
			}
		?>
	</ul>
	<br/>
	<h4>Newest Product</h4>
	<?php foreach($topProduct as $row) {
			echo "<div class='thumbnail'>";
				echo "<a  href='".base_url("index.php/Home/ProductDetail/".$row['product_id'])."' style='text-align:center;'><img src='".base_url('assets/Prod_Img/'.$row['product_id'].".jpg")."' style='width:100px; height:100px; object-fit:contain'></a>";
				echo "<div class='caption'>";
					if(strlen($row['name']) > 60) {
						$name = substr($row['name'], 0, 60) . ". . .";
					}
					else {
						$name = $row['name'];
					}
					echo "<h5 style='height:40px; width:250px;'>".$name."</h5>";
					echo "<h4 style='text-align:center'><p style='color:orangered;'>Rp. ".$row['price']."</p></h4>";
				echo "</div>";
			echo "</div>";
			echo "<br>";
		}	
	?>
</div>
<!-- Sidebar end=============================================== -->