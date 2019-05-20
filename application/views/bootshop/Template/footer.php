<div  id="footerSection">
	<div class="container">
		<div class="row">
			<?php 
	 			if(isset($this->session->user) || $this->session->user !== NULL) {
					echo "<div class='span3'>";
					echo "<h5>ACCOUNT</h5>";
					echo "<a href='".base_url('index.php/Home/Account')."'>YOUR ACCOUNT</a>";
					echo "<a href='".base_url('index.php/Home/Cart')."'>ORDER</a>";
					echo "</div>";
			?>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="<?php echo base_url('index.php/Home/Contact')?>">CONTACT</a>  
				<a href="<?php echo base_url('index.php/Register')?>">REGISTRATION</a>
				</div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="https://www.facebook.com/UniversitasMultimediaNusantara/"><img width="60" height="60" src="<?php echo base_url('assets/themes/images/facebook.png')?>" title="facebook" alt="facebook"/></a>
				<a href="https://www.instagram.com/universitasmultimedianusantara/"><img width="60" height="60" src="<?php echo base_url('assets/themes/images/instagram.png')?>" title="instagram" alt="instagram"/></a>
				</div> 
			</div>
		<p class="pull-right">&copy;  UMN 2019</p>
	</div><!-- Container End -->
</div>