<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">
		
		<?=validation_errors(); ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4">
						<img src="<?=base_url('public/uploads/' . $sliderImage['path'])?>" class="img-responsive" alt="Image">
					</div>
					<div class="col-sm-8">
						<label for="file">Image</label>
						<input type="file" name="file" id="file">		
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?=$sliderImage['title']?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" rows="5" class="form-control"><?=$sliderImage['description']?></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>