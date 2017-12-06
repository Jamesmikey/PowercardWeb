<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">

		<?=validation_errors(); ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="Service Title">
			</div>
			<div class="form-group">
				<label for="body">Body</label>
				<textarea name="body" id="body" rows="10" class="form-control" placeholder="A little about the service"></textarea>
			</div>

			<div class="form-group">
				<label for="image">Image</label>
				<input type="file" name="image" id="image">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>