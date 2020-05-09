<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Profile</h1>
			</div>
			<div class="card-body">
				<p><b>Firstname: </b><?= esc($user['firstname']); ?></p>
        <p><b>Lastname: </b><?= esc($user['lastname']); ?></p>
        <p><b>Username: </b><?= esc($user['username']); ?></p>
        <p><b>Email: </b><?= esc($user['email']); ?></p>
				<p><a href="<?= route_to('user-update') ?>" class="btn btn-warning">Edit</a></p>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
