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

	<?php echo $sidebar ?>

<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url("index.php") ?>">Home</a> <span class="divider">/</span></li>
    <li class="active">Product Details</li>
    </ul>	
	<div class="row">
		<?php foreach($product as $row) {?>	  
			<div id="gallery" class="span3">
				<img src="<?php echo base_url('assets/Prod_Img/'.$row['product_id'].".jpg")?>" style="width:100%" alt="<?php echo $row['name']?>"/>
			</div>
			<div class="span6">
				<h3> <?php echo $row['name'] ?> </h3>
				<hr class="soft"/>
				<div class="row">
					<div class=span3>
						<h4> <?php echo "Rp. ".$row['price'] ?> </h4>
					</div>
					<div class="span3">
						<a class="btn btn-large btn-primary pull-right" href="<?php echo base_url('index.php/Cart/Add/'.$row['product_id'])?>">Add to cart <i class=" icon-shopping-cart"></i></a>
					</div>
					
				</div>
				
				<hr class="soft clr"/>
				<p>
					<?php
						$desc = preg_replace('(\s-)', '<br>-',  $row['description']);
						echo $desc;
					?>
				</p>
		<?php } ?>
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