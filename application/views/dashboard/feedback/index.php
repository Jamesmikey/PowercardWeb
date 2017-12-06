<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?> <strong>(<?=count($feedbacks)?> Total)</strong></h3>
	</div>
	<div class="panel-body">
		<?php if (count($feedbacks) > 0): ?>
			<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>From</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Message</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;?>
					<?php foreach($feedbacks as $feedback):?>
						<tr>
							<td class="text-right"><?=$i++?>.</td>
							<td><?=$feedback['name']?></td>
							<td><?=$feedback['phone']?></td>
							<td><?=$feedback['email']?></td>
							<td><?=$feedback['message']?></td>
							<td><?=$feedback['created_at']?></td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
			</div>
		<?php else:?>
			<p class="lead text-center">
				No Feedback
			</p>
		<?php endif;?>
	</div>
</div>