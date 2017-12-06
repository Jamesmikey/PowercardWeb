<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">
		<?php if (count($services) > 0):?>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>SN</th>
						<th>Title</th>
						<th>Image</th>
						<th>Description</th>
						<th>Created</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;?>
					<?php foreach($services as $service):?>
						<tr>
							<td class="text-right"><?=$i++;?>.</td>
							<td>
								<a href="<?=base_url('index.php/dashboard/services/' . $service['id'])?>">
									<?=$service['title']?>
								</a>
							</td>
							<td>
								<img src="<?=base_url('public/uploads/' . $service['image'])?>" class="img-responsive" alt="Image">
							</td>
							<td><?=$service['description']?></td>
							<td><?=$service['created_at']?></td>
							<td>
								<a href="<?=base_url('index.php/dashboard/services/' . $service['id'] . '/edit')?>">Edit</a>
							</td>
							<td>
								<a class="btn btn-primary" data-toggle="modal" href='#delete-service-<?=$service['id']?>'>Delete</a>
								<div class="modal fade" id="delete-service-<?=$service['id']?>">
									<div class="modal-dialog">
										<form action="<?=base_url('index.php/dashboard/services/' . $service['id'] . '/delete')?>" method="post">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">Delete <?=$service['title']?></h4>
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
					<?php endforeach;?>
				</tbody>
			</table>
		<?php else:?>
			<p class="lead text-center">
				No Service
			</p>
		<?php endif?>
	</div>
	<div class="panel-footer">
		<a href="<?=base_url('index.php/dashboard/services/create')?>">Add New Service</a>
	</div>
</div>