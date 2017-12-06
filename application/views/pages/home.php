<div class="container">
	<?php if(count($sliderImages) > 0): ?>
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php foreach($sliderImages as $sliderImage): ?>
				<li data-target="#carousel-id" data-slide-to="<?=$sliderImage['id']?>" class="<?= $sliderImage['active'] ? 'active' : '' ?>"></li>
				<?php endforeach ?>
			</ol>
			<div class="carousel-inner">
				<?php foreach($sliderImages as $sliderImage): ?>
					<div class="item <?= $sliderImage['active'] ? 'active' : '' ?>">
						<img src="<?=base_url('public/uploads/' . $sliderImage['path'])?>" width="1152" height="400" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h1><?=$sliderImage['title'] ?></h1>
								<p><?=$sliderImage['description'] ?></p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	<?php endif ?>	
</div>

<div class="container">
	<br><br>
	<div class="row">
		<div class="col-sm-6">
			<img src="<?=base_url('public/img/logo.png')?>" class="img-responsive" alt="">
		</div>	
		<div class="col-sm-6">
			<h1>About</h1>
			<p class="lead">
				<?=$site['about']?>
			</p>
			<p>
				<a href="<?=base_url('index.php/about')?>">Read more &raquo;</a>
			</p>
		</div>
	</div>
	<div class="row">
		<h2 class="text-center">Services</h2>
		<br><br>
		<?php foreach($services as $service):?>
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="thumbnail" style="min-height: 450px;">
					<img src="<?=base_url('public/uploads/' . $service['image'])?>" alt="">
					<div class="caption">
						<h3>
							<a href="<?=base_url('index.php/services/' . $service['id'])?>">
								<?=$service['title']?>
							</a>
						</h3>
						<p>
							<?=$service['description']?>
						</p>
					</div>
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>

<div class="tag-line">
	<p class="lead text-center">
		"<?=$site['tag_line']?>"
	</p>	
</div>
