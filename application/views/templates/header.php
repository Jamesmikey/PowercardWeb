<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Powercard Group Company Ltd - <?=$title?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
	<link rel="stylesheet" href="<?=base_url('public/css/app.css')?>">
	<?php if($this->uri->segment(1) === 'services'): ?>
		<link rel="stylesheet" href="<?=base_url('public/css/lightbox.min.css')?>">
		<style>
		    .jssorb057 .i {position:absolute;cursor:pointer;}
		    .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
		    .jssorb057 .i:hover .b {stroke-opacity:.7;}
		    .jssorb057 .iav .b {stroke-opacity: 1;}
		    .jssorb057 .i.idn {opacity:.3;}

		    .jssora073 {display:block;position:absolute;cursor:pointer;}
		    .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
		    .jssora073:hover {opacity:.8;}
		    .jssora073.jssora073dn {opacity:.4;}
		    .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
		</style>
	<?php endif;?>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url('/')?>">Powercard Group Company Ltd</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				&nbsp;
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="<?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>"><a href="<?=base_url('index.php/home')?>">Home</a></li>
				<li class="<?= $this->uri->segment(1) == 'about' ? 'active' : '' ?>"><a href="<?=base_url('index.php/about')?>">About</a></li>
				<?php if(isset($services) && count($services) > 0):?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php foreach($services as $service):?>
								<li><a href="<?=base_url('index.php/services/' . $service['id'])?>"><?=$service['title']?></a></li>
							<?php endforeach;?>
						</ul>
					</li>
				<?php endif;?>
				<li class="<?= $this->uri->segment(1) == 'contact' ? 'active' : '' ?>"><a href="<?=base_url('index.php/contact')?>">Contact</a></li>
				<?php if (!$this->session->userdata('phone')): ?>
					<!-- 
						<li><a href="<?=base_url('index.php/login')?>">Login</a></li>
						<li><a href="<?=base_url('index.php/register')?>">Register</a></li> 
					-->
				<?php else: ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($this->session->userdata('email'))))?>?size=20" class="img-circle" alt=""> <?=$this->session->userdata('first_name')?> <?=$this->session->userdata('last_name')?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url('index.php/dashboard')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
							<li><a href="<?=base_url('index.php/dashboard/settings/profile')?>"><i class="fa fa-user fa-fw"></i> Profile</a></li>
							<li><a href="<?=base_url('index.php/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
						</ul>
					</li>
				<?php endif ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<div class="container">
	<ol class="breadcrumb">
		<li>
			<a href="<?=base_url('index.php/home')?>"><i class="fa fa-home"></i></a>
		</li>
		<li>
			<a href="<?=base_url('index.php/' . $this->uri->segment(1))?>"><?=ucfirst($this->uri->segment(1))?></a>
		</li>
		<li class="active"><?=ucfirst($this->uri->segment(2))?></li>
	</ol>
</div>

<div class="container">
	<?php if ($this->session->flashdata('success_message')): ?>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?=$this->session->flashdata('success_message')?>
		</div>
	<?php endif ?>

	<?php if ($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!</strong> <?=$this->session->flashdata('error_message')?>
		</div>
	<?php endif ?>

	<?php if ($this->session->userdata('phone')) :?>
		<?php if($this->uri->segment(1) === 'dashboard'): ?>
			<div class="row">
				<div class="col-sm-2">
					<div class="list-group">
						<a href="<?=base_url('index.php/dashboard')?>" class="list-group-item <?=($this->uri->segment(1) == 'dashboard' && $this->uri->segment(2) == '') ? 'active' : '' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
						<a href="<?=base_url('index.php/dashboard/slider-images')?>" class="list-group-item <?=$this->uri->segment(2) == 'slider-images' ? 'active' : '' ?>"><i class="fa fa-image fa-fw"></i> Slider Images</a>
						<a href="<?=base_url('index.php/dashboard/feedback')?>" class="list-group-item <?=$this->uri->segment(2) == 'feedback' ? 'active' : '' ?>"><i class="fa fa-comments fa-fw"></i> Feedback</a>
						<a href="<?=base_url('index.php/dashboard/services')?>" class="list-group-item <?=$this->uri->segment(2) == 'services' ? 'active' : '' ?>"><i class="fa fa-cog fa-fw"></i> Services</a>
						<a href="<?=base_url('index.php/dashboard/settings')?>" class="list-group-item <?=($this->uri->segment(2) == 'settings' && $this->uri->segment(3) != 'profile' && $this->uri->segment(3) != 'password') ? 'active' : '' ?>"><i class="fa fa-wrench fa-fw"></i> Settings</a>
						<a href="<?=base_url('index.php/dashboard/settings/profile')?>" class="list-group-item <?=$this->uri->segment(3) == 'profile' ? 'active' : '' ?>"><i class="fa fa-user fa-fw"></i> My Profile</a>
						<a href="<?=base_url('index.php/dashboard/settings/password')?>" class="list-group-item <?=$this->uri->segment(3) == 'password' ? 'active' : '' ?>"><i class="fa fa-lock fa-fw"></i> Change Password</a>
					</div>
				</div>
				<div class="col-sm-10">
					<?php isset($content) ? $this->load->view($content) : '' ?>
				</div>
			</div>
		<?php endif;?>
	<?php endif ?>

</div>
	