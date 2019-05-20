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
	<?php echo form_open('Register',array('class'=>'form-horizontal'));?>
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name</label>
			<div class="controls">
			  <input type="text" id="FirstName" name="FirstName" placeholder="First Name" value="<?php echo set_value('FirstName')?>">
				<?php echo form_error('FirstName')?>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name</label>
			<div class="controls">
			  <input type="text" id="LastName" name="LastName" placeholder="Last Name" value="<?php echo set_value('LastName')?>">
				<?php echo form_error('LastName')?>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="username">Username</label>
		<div class="controls">
		  <input type="text" id="username" name="username" placeholder="Username" value="<?php echo set_value('username')?>">
			<?php echo form_error('username')?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
		  <input type="password" id="password"  name="password" placeholder="Password">
			<?php echo form_error('password')?>
		</div>
		</div>
	<div class="control-group">
		<label class="control-label" for="retype_pass">Retype Password</label>
		<div class="controls">
		  <input type="password" id="retype_pass"  name="retype_pass" placeholder="Password">
			<?php echo form_error('retype_pass')?>
		</div>
	  </div>
	<div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Please Fill The Required Field!</strong> 
		<p>Fill in your information completely for your convenience and security.</p>
	 </div>	

		<h4>Your address</h4>
		
		<div class="control-group">
			<label class="control-label" for="address">Address</label>
			<div class="controls">
			  <input type="text" id="address" name="address" placeholder="Address" value="<?php echo set_value('address')?>">
				<?php echo form_error('address')?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="city">City</label>
			<div class="controls">
			  <input type="text" id="city" name="city" placeholder="City" value="<?php echo set_value('city')?>"> 
				<?php echo form_error('city')?>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="postcode">Zip / Postal Code</label>
			<div class="controls">
			  <input type="text" id="postcode" name="postcode" placeholder="Zip / Postal Code" value="<?php echo set_value('postcode')?>"> 
				<?php echo form_error('postcode')?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="country">Country</label>
			<div class="controls">
				<input type="text" name="country" id="country" placeholder="Country" value="<?php echo set_value('country')?>">
				<?php echo form_error('country')?>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone</label>
			<div class="controls">
			  <input type="text" name="phone" id="mobile" placeholder="Mobile Phone" value="<?php echo set_value('phone')?>"> 
				<?php echo form_error('phone')?>
			</div>
		</div>
		
	<!-- <p><sup>*</sup>Required field	</p> -->
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
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