<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Cart</title>
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
		<?php echo $style?>
		<style type="text/css" id="enject"></style>
	</head>
	<body>
		<?php echo $header?>
		<!-- Header End====================================================================== -->
		<div id="mainBody">
			<div class="container">
				<div class="row">
					<!-- Sidebar ================================================== -->
					<!-- Sidebar end=============================================== -->
					<div class="span9">
						<h3>  SHOPPING CART [ <small><?php echo $this->user->CountOrder();?> Item(s) </small>]<a href="<?php echo base_url('index.php/Home')?>" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
						<hr class="soft"/>		
						
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Product</th>
									<th>Description</th>
									<th>Quantity/Update</th>
									<th>Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if($ProductOrder !== NULL && count($ProductOrder) != 0){
									$Total = 0;
									foreach($ProductOrder as $Order){
									?>

								<tr>
									<td> <img width="60" src="<?php echo base_url('assets/Prod_Img/'.$Order['product_id'].'.jpg')?>" alt=""/></td>
									<td><?php echo $Order['name']?></td>
									<td>
										<div class="input-append"><h5><?php echo $Order['qty']?></h5><a href="<?php echo base_url('index.php/Cart/DecrementQty/'.$Order['product_id'])?>" class="btn" type="button"><i class="icon-minus"></i></a><a href="<?php echo base_url('index.php/Cart/IncrementQty/'.$Order['product_id'])?>" class="btn" type="button"><i class="icon-plus"></i></a><a href="<?php echo base_url('index.php/Cart/Delete/'.$Order['product_id'])?>" class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></a>				</div>
									</td>
									<td><?php echo $Order['price'] ?></td>
									<td><?php echo $Temp = $Order['price'] * $Order['qty']?></td>
								</tr>
								<?php $Total += $Temp;
								}?>

								<tr>
									<td colspan="6" style="text-align:right"><strong>TOTAL=</strong></td>
									<td class="label label-important" style="display:block"> <strong> <?php echo $Total?> </strong></td>
								</tr>
									<?php }?>
							</tbody>
						</table>
						
						<table class="table table-bordered">
							<tr><th>ESTIMATE YOUR SHIPPING </th></tr>
							<tr> 
								<td>
										<div class="control-group">
											<label class="control-label" for="inputCountry">Address Shipping </label>
											<div class="controls">
												<p><?php echo $Address?></p>
											</div>
										</div>		  
								</td>
							</tr>
						</table>
						<?php if($ProductOrder !== NULL && count($ProductOrder) != 0){?>
						<a href="login.html" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
						<?php }?>
					</div>
				</div></div>
			</div>
			<!-- MainBody End ============================= -->
			<!-- Footer ================================================================== -->
			<?php echo $footer?>
			<!-- Placed at the end of the document so the pages load faster ============================================= -->
			<?php echo $script?>
			<span id="themesBtn"></span>
		</body>
		</html>