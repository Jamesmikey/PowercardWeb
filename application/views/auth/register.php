<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h2>Register</h2>

			<?=validation_errors(); ?>

			<form action="" method="post">
				<div class="form-group">
					<label for="first_name">First name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" placeholder="e.g. Joseph">
				</div>
				<div class="form-group">
					<label for="last_name">Last name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" placeholder="e.g. Mtinangi">
				</div>
				<div class="form-group">
					<label for="phone">Phone Number</label>
					<input type="number" name="phone" id="phone" class="form-control" placeholder="e.g. 0789106396">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="4 charactes minimum">
				</div>

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>