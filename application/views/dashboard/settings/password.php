<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Change password</h3>
	</div>
	<div class="panel-body">

		<?=validation_errors(); ?>

		<form action="" method="POST" class="form-horizontal" role="form">
		
				<div class="form-group">
					<label for="old_password" class="col-sm-2 control-label">Old Password</label>
					<div class="col-sm-4">
						<input type="password" name="old_password" id="old_password" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-2 control-label">New Password</label>
					<div class="col-sm-4">
						<input type="password" name="password" id="password" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>
					<div class="col-sm-4">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Change</button>
					</div>
				</div>
		</form>
	</div>
</div>