<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">
		
		<?php if (count($sliderImages) > 0): ?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>SN</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Uploaded</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach($sliderImages as $sliderImage): ?>
						<tr>
							<td><?=$i++?>.</td>
							<td><?=$sliderImage['title']?></td>
							<td><?=$sliderImage['description']?></td>
							<td>
								<img src="<?=base_url('public/uploads/' . $sliderImage['path'])?>" width="150" height="100" class="img-responsive" alt="Image">
							</td>
							<td><?=$sliderImage['created_at']?></td>
							<td>
								<a href="<?=base_url('index.php/dashboard/slider-images/' . $sliderImage['id'] . '/edit')?>" class="btn btn-link">Edit</a>
							</td>
							<td>
								<a class="btn btn-link" data-toggle="modal" href='#delete-slider-image-<?=$sliderImage['id']?>'>Delete</a>
								<div class="modal fade" id="delete-slider-image-<?=$sliderImage['id']?>">
									<div class="modal-dialog">
										<form action="<?=base_url('index.php/dashboard/slider-images/' . $sliderImage['id'] . '/delete')?>" method="post">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Delete</h4>
												</div>
												<div class="modal-body">
													Are you sure?
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
					<?php endforeach; ?>					
				</tbody>
			</table>
		<?php else: ?>
			<p class="lead text-center">
				No slider image
			</p>
		<?php endif; ?>

	</div>
	<div class="panel-footer">
		<a href="<?=base_url('index.php/dashboard/slider-images/upload')?>">Upload</a>
	</div>
</div>