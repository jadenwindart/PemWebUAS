<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->

	<?php echo $style ?>

	<style type="text/css" id="enject"></style>
  </head>
<body>

	<?php echo $header ?>

<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
				<li><a href="products.html"> LAPTOP</a></li>
				<li><a href="products.html"> KEYBOARD AND MOUSE</a></li>
				<li><a href="products.html">HEADPHONE</a></li>
				<li><a href="products.html">EXTERNAL MEMORY</a></li>
			</ul>
		<br/>
		<div class="thumbnail">
				<img src="themes/images/laptop/MSIGL627RDXL1.png" alt="MSIGL627RDXL1"/>
				<div class="caption">
					<h5>MSI GL62 7RDX</h5>
					<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered;">Rp.10.999.000</p></h4>
				</div>
				</div><br/>
				<div class="thumbnail">
					<img src="themes/images/headphone/razerthumbnail.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
					<div class="caption">
						<h5>Razer Chimaera 5.1 Wireless gaming Headset</h5>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <p style="color:orangered;">Rp8.828.400</p></h4>
					</div>
					</div><br/>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">Product Details</li>
    </ul>	
	<div class="row">
		<?php foreach($product as $row) {?>	  
			<div id="gallery" class="span3">
				<img src="<?php echo base_url('assets/Prod_Img/'.$row['product_id'].".jpg")?>" style="width:100%" alt="MSI GL62 7RDX"/>
			</div>
			<div class="span6">
				<h3> <?php echo $row['name'] ?> </h3>
				<!-- <small>Core i7, DDR4, 32GB, HDD, SSD</small> -->
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span> <?php echo "Rp. ".$row['price'] ?> </span></label>
					<div class="controls">
					<input type="number" class="span1" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft clr"/>
				<p>
					<!-- Laptop gaming dengan layar 15.6" yang memiliki prosesor Core i7, penyimpanan memori yang cepat, memori pendukung DDR4-2400 terbaru yang akan membuat performa game lebih cepat -->
				
					<?php	echo $row['description'] ; ?>

				</p>
		<?php } ?>
				<!-- <a class="btn btn-small pull-right" href="#detail">More Details</a> -->
				<br class="clr"/>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php echo $footer ?>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<?php echo $script ?>
<span id="themesBtn"></span>
</body>
</html>