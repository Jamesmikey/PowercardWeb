<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">
		
		<?=validation_errors(); ?>

		<?php if (count($error) > 0): ?>
			<?php foreach($error as $message):?>
				<?=$message?>
			<?php endforeach; ?>
		<?php endif; ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" rows="5" class="form-control"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Upload</button>
		</form>
	</div>
</div>