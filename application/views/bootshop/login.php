<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span1"> &nbsp;</div>
		<div class="span4">
		<table class="table table-bordered">
			<tr><th> I AM ALREADY REGISTERED  </th></tr>
			<tr> 
				<td>
				<?php echo form_open('Home/LoginCheck',array('class'=>'form-horizontal loginFrm'))?>
						<div class="control-group">
							<label class="control-label" for="inputUsername">Username</label>
							<div class="controls">
								<input type="text" id="username" name="username" placeholder="Username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword1">Password</label>
							<div class="controls">
								<input type="password" id="inputPassword1" name="password" placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn">Sign in</button> OR <a href="<?php echo base_url('index.php/Home/Register')?>" class="btn">Register Now!</a>
							</div>
						</div>
						<?php echo form_close()?>
				</td>
			</tr>
		</table>		
		</div>
	</div>	
	
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