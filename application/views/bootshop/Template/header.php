<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span12"> 
	<div class="pull-right">
		<!-- <a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a> -->
		<a href="<?php echo base_url('product_summary')?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
	<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/themes/images/logo.png')?>" alt="Bootsshop"/></a>
        <?php echo form_open('product/search',array('class'=>'form-inline navbar-search'))?>

		<input id="srchFld" class="srchTxt" type="text" />
		  <!-- <select class="srchTxt">
			<option>All</option>
			<option>LAPTOP </option>
			<option>KEYBOARD AND MOUSE </option>
			<option>HEADPHONE </option>
			<option>EXTERNAL HARDDISK </option>
		</select>  -->
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
        <?php echo form_close()?>
    <ul id="topMenu" class="nav pull-right">
	 <!-- <li class=""><a href="special_offer.html">Specials Offer</a></li> -->
	 <li class=""><a href="<?php echo base_url('index.php/delivery')?>">Delivery</a></li>
	 <li class=""><a href="<?php echo base_url('index.php/Contact')?>">Contact</a></li>
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
            <?php echo form_open('Home/Login',array('class'=>'form-horizontal loginFrm'))?>
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			<?php echo form_close()?>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->