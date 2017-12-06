<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Service</h3>
	</div>
	<div class="panel-body">

		<h2><?=$service['title']?></h2>

		<?=$service['description']?>

		<br>

		<img src="<?=base_url('public/uploads/' . $service['image'])?>" width="640" height="480" class="img-responsive" alt="Image">

	</div>
	<div class="panel-footer">
		<a href="#">Edit</a>
		<a href="#">Delete</a>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Images <strong>(<?=count($images)?> Total)</strong></h3>
	</div>
	<div class="panel-body">
		<?php if(count($images) > 0):?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>SN</th>
						<th>Image</th>
						<th>Title</th>
						<th>Description</th>
						<th>Uploaded</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;?>
					<?php foreach($images as $image):?>
						<tr>
							<td><?=$i++;?>.</td>
							<td>
								<img src="<?=base_url('public/uploads/' . $image['path'])?>" width="150" height="100" class="img-responsive" alt="Image">
							</td>
							<td><?=$image['title'];?></td>
							<td><?=$image['description'];?></td>
							<td><?=$image['created_at'];?></td>
							<td>
								<a class="btn btn-primary" data-toggle="modal" href='#edit-image-<?=$image['id']?>'>Edit</a>
								<div class="modal fade" id="edit-image-<?=$image['id']?>">
									<div class="modal-dialog">
										<form action="<?=base_url('index.php/dashboard/services/' . $service['id'] . '/images/' . $image['id'] . '/update')?>" method="post">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Edit</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="title">Title</label>
														<input type="text" name="title" id="title" value="<?=$image['title']?>" class="form-control">
													</div>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<label for="title">Description</label>
														<textarea name="description" id="description" rows="10" class="form-control"><?=$image['description']?></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													<button type="submit" class="btn btn-primary">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
							<td>
								<a class="btn btn-danger" data-toggle="modal" href="#delete-image-<?=$image['id']?>">Delete</a>
								<div class="modal fade" id="delete-image-<?=$image['id']?>">
									<div class="modal-dialog">
										<form action="<?=base_url('index.php/dashboard/services/' . $service['id'] . '/images/' . $image['id'] . '/delete')?>" method="post">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Delete Image</h4>
												</div>
												<div class="modal-body">
													<strong>Are you sure?</strong>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													<button type="submit" class="btn btn-primary">Delete</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		<?php else:?>
			<p class="lead text-center">No Image</p>
		<?php endif;?>
	</div>
	<div class="panel-footer">
		<a href="<?=base_url('index.php/dashboard/services/' . $service['id'] . '/images')?>">Upload</a>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Upload Images</h3>
	</div>
	<div class="panel-body">

	<form 
		action="<?=base_url('index.php/dashboard/services/'. $service['id'] .'/images')?>" 
		method="post" enctype="multipart/form-data" 
		class="dropzone" 
		id="my-awesome-dropzone">

		<input type="hidden" name="service_id" value="<?=$this->uri->segment(3)?>">

	</form>

	</div>
</div>