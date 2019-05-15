<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LepiMania</title>
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
	<?php echo $header;
	?>


<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php echo $sidebar ?>
<!-- Sidebar end=============================================== -->
		<div class="span9">	
		<h4>List Products </h4>
			  <?php echo $products?>	
		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<?php echo $footer?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<?php echo $script?>
</div>
</body>
</html>