<div id="header">
<div class="container">
	<?php if(isset($this->session->user) || $this->session->user !== NULL){?>
	<div id="welcomeLine" class="row">
		<div class="span12"> 
			<div class="pull-right">
				<!-- <a href="product_summary.html"><span class="">Fr</span></a>
				<a href="product_summary.html"><span class="">Es</span></a>
				<span class="btn btn-mini">En</span>
				<a href="product_summary.html"><span>&pound;</span></a>
				<span class="btn btn-mini">$155.00</span>
				<a href="product_summary.html"><span class="">$</span></a> -->
				<a href="<?php echo base_url('index.php/Home/Cart')?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $CountOrder ?> ] Itemes in your cart </span> </a> 
			</div>
		</div>
	</div>
	<?php }?>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
	<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/themes/images/logo.png')?>" alt="Bootsshop"/></a>
        <?php echo form_open('Home',array('class'=>'form-inline navbar-search'))?>

		<input id="srchFld" name="searchProduct" class="srchTxt" type="text" />
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
	 <li class=""><a href="<?php echo base_url('/')?>">Home</a></li>
	 <?php 
	 if(isset($this->session->user) || $this->session->user !== NULL){?>
	 <li class=""><a href="<?php echo base_url('index.php/Home/Account')?>">Account</a></li>
	 <?php } ?>
	 <li class=""><a href="<?php echo base_url('index.php/Home/Contact')?>">Contact</a></li>
	 <?php 
	 if(!isset($this->session->user) || $this->session->user === NULL){?>
	 <li class="">
	 <a href="<?php echo base_url('index.php/Home/Login');?>" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	</li>
	<li class=""><a href="<?php echo base_url('index.php/Home/Register')?>">Register</a></li>
	 <?php }
	 else{?>
		<li class=""><a href="<?php echo base_url('index.php/Home/SignOut')?>">SignOut</a></li>
	 <?php }?>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->