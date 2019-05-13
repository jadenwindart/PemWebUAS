<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
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
	<div class="span9">
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<?php echo form_open('Register',array('class'=>'form-horizontal'));?>
        <h4>Your personal information</h4>
        <div class="control-group">
		<label class="control-label" for="username">Username</label>
		<div class="controls">
		  <p><?php echo $this->user->GetUsername()  ?></p>
		</div>
	  </div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Name</label>
			<div class="controls">
			  <p><?php echo $this->user->GetName()  ?></p>
			</div>
		 </div>
		
		<div class="control-group">
			<label class="control-label" for="address">Address</label>
			<div class="controls">
			  <p><?php echo $this->user->GetAddress()  ?></p>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <p><?php echo $this->user->GetMobilePhone()  ?></p>
			</div>
		</div>

		
	<?php echo form_close()?>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php echo $footer?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<?php echo $script?>
<span id="themesBtn"></span>
</body>
</html>