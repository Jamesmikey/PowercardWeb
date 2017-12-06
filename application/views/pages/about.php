<div class="jumbotron">
	<div class="container">
		<h1><?=$title?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<p class="lead">
				<?=$site['about']?>
			</p>
		</div>
	</div>
	<div class="row">
		<h1 class="text-center">The Team</h1>

		<br><br>

		<?php foreach(array_chunk($users, 4) as $userSet):?>
			<div class="row">
				<?php foreach($userSet as $user):?>
		        <div class="col-sm-3">
		            <div class="thumbnail">
		                <img src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($user['email'])))?>?size=120" class="img-circle" alt="">
		                <div class="caption text-center">
		                    <h3><?=$user['first_name']?> <?=$user['last_name']?></h3>
		                    <p><?=$user['position']?></p>
		                </div>
		            </div>
		        </div>
				<?php endforeach;?>
		    </div>
		<?php endforeach;?>

	</div>
</div>