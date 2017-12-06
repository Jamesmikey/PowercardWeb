<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><?=$title?></h3>
	</div>
	<div class="panel-body">

		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<img src="https://www.gravatar.com/avatar/<?=md5(strtolower(trim($user['email'])))?>?size=120" class="img-circle" alt="">
			</div>
		</div>

		<br><br>

		<div class="row">
			<div class="col-sm-12">
				
<form action="" method="POST" class="form-horizontal" role="form">
		
				<div class="form-group">
					<label for="first_name" class="col-sm-2 control-label">First name</label>
					<div class="col-sm-4">
						<input type="text" name="first_name" id="first_name" value="<?=$user['first_name']?>" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="last_name" class="col-sm-2 control-label">Last name</label>
					<div class="col-sm-4">
						<input type="text" name="last_name" id="last_name" value="<?=$user['last_name']?>" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="phone" class="col-sm-2 control-label">Phone number</label>
					<div class="col-sm-4">
						<input type="number" name="phone" id="phone" value="<?=$user['phone']?>" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email Address</label>
					<div class="col-sm-4">
						<input type="email" name="email" id="email" value="<?=$user['email']?>" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label for="position" class="col-sm-2 control-label">Company Position</label>
					<div class="col-sm-4">
						<input type="text" name="position" id="position"  value="<?=$user['position']?>" class="form-control">
					</div>
				</div>
		

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</div>
		</form>

			</div>
		</div>
	</div>
</div>