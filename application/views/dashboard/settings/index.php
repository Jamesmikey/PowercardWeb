<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">
	
		<?=validation_errors(); ?>

		<form action="" method="post">

			<input type="hidden" name="id" value="<?=$site['id']?>">

			<div class="form-group">
				<label for="name">Site name</label>
				<input type="text" name="name" id="name" value="<?=$site['name']?>" class="form-control" placeholder="Name of the site">
			</div>
			<div class="form-group">
				<label for="tag_line">Tag line</label>
				<input type="text" name="tag_line" id="tag_line" value="<?=$site['tag_line']?>" class="form-control" placeholder="Tag line">
			</div>
			<div class="form-group">
				<label for="about">About</label>
				<textarea name="about" id="about" rows="10" class="form-control"><?=$site['about']?></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>