<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Password change</h1>
			</div>
			<div class="card-body">
				<form method="post" action="<?= route_to('user-password') ?>">
					<?= csrf_field() ?>
					<div class="form-group">
							<input type="password" class="form-control" name="password" minlength="6" maxlength="100" placeholder="Password" required>
							<span class="text-error"><?= \Config\Services::validation()->getError('password'); ?></span>
					</div>
					<div class="form-group">
							<input type="password" class="form-control" name="password_confirm" minlength="6" maxlength="100" placeholder="Password confirmation" required>
							<span class="text-error"><?= \Config\Services::validation()->getError('password_confirm'); ?></span>
					</div>
					<div class="form-group">
							<input type="submit" class="btn btn-success" name="send" value="Send">
					</div>
				</form>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-header">
				<h1>Disconnect</h1>
			</div>
			<div class="card-body">
				For disconnect your account of the system click <br><br><a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">here</a>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Disconnect</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form method="post" action="<?= route_to('user-disconnect') ?>">
				      	<?= csrf_field() ?>
					      <div class="modal-body">
					      	Are you sure you want to delete this account? Once removed there will be no turning back.
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-danger">Confirm</button>
					      </div>
					  </form>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
