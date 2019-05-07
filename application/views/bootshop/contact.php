<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact Us!</title>
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
		<div id="mainBody">
			<div class="container">
				<hr class="soften">
				<h1>Visit us</h1>
				<hr class="soften"/>	
				<div class="row">
					<div class="span4">
						<h4>Jl. Scientia Boulevard </h4>
						<p>	Gading Serpong,<br/> Tangerang, Banten 15811
							<br/><br/>
							pemweb@gmail.com<br/>
							﻿Tel +62-21.5422.0808<br/>
							Fax +62-21.5422.0800<br/>
						</p>		
					</div>
					
					<div class="span4">
						<h4>Opening Hours</h4>
						<h5> Monday - Friday</h5>
						<p>9am - 9pm<br/><br/></p>
						<h5>Saturday - Sunday</h5>
						<p>9am - 5pm<br/><br/></p>
					</div>
					<div class="span4">
						<h4>Email Us</h4>
						<form class="form-horizontal">
							<fieldset>
								<div class="control-group">
									
									<input type="text" placeholder="name" class="input-xlarge"/>
									
								</div>
								<div class="control-group">
									
									<input type="text" placeholder="email" class="input-xlarge"/>
									
								</div>
								<div class="control-group">
									
									<input type="text" placeholder="subject" class="input-xlarge"/>
									
								</div>
								<div class="control-group">
									<textarea rows="3" id="textarea" class="input-xlarge"></textarea>
									
								</div>
								
								<button class="btn btn-large" type="submit">Send Messages</button>
								
							</fieldset>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="span12">
							<!-- <iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br /> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7932.140872736881!2d106.61655067418737!3d-6.2544507818913155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2suniversitas+multimedia+nusantara!3m2!1d-6.2577469!2d106.61834809999999!5e0!3m2!1sid!2sid!4v1557048742147!5m2!1sid!2sid" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe><br />
						<small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					</div>
				</div>
			</div>
		</div>
		<!-- MainBody End ============================= -->
		<!-- Footer ================================================================== -->
		<?php echo $footer?>
		<!-- Placed at the end of the document so the pages load faster ============================================= -->
		<?php echo $script?>
		
		
	</body>
	</html>