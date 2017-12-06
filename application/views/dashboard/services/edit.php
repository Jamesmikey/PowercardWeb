<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$service['title']?></h3>
	</div>
	<div class="panel-body">

		<?=validation_errors(); ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" id="title" value="<?=$service['title']?>" class="form-control" placeholder="Service Title">
			</div>
			<div class="form-group">
				<label for="body">Body</label>
				<textarea name="body" id="body" rows="10" class="form-control" placeholder="A little about the service"><?=$service['description']?></textarea>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<img src="<?=base_url('public/uploads/' . $service['image'])?>" class="img-responsive" alt="Image">
					</div>
				</div>
				<div class="col-sm-6">
					<label for="image">Change Image</label>
					<input type="file" name="file" id="file">		
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>