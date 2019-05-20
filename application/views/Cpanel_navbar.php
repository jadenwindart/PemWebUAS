<?php defined('BASEPATH') OR exit('No direct script access allowed !'); ?>

<div class="container">
	<div class="row">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"> Toggle Navigation </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(); ?>"> DASHBOARD </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				<li >
						<a href="<?php echo base_url('index.php/Cpanel/Transaction')?>" type="button"></a>
						
					</li>
					<li >
						<a class="" type="button" data-toggle="dropdown">Hello, <?php echo $this->session->admin; ?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url("index.php/Cpanel/SignOut"); ?>">Sign Out</a></li>
						</ul>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</div>
</div>