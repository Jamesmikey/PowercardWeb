<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h2>Login</h2>

			<?=validation_errors(); ?>

			<form action="" method="post">
				<div class="form-group">
					<label for="phone">Phone Number</label>
					<input type="number" name="phone" id="phone" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>

				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>