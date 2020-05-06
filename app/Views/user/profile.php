<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<section>
		<div class="card">
			<div class="card-header">
				<h1>Profile</h1>
			</div>
			<div class="card-body">
				<p><b>Firstname: </b><?= esc($user['firstname']); ?></p>
        <p><b>Lastname: </b><?= esc($user['lastname']); ?></p>
        <p><b>Username: </b><?= esc($user['username']); ?></p>
        <p><b>Email: </b><?= esc($user['email']); ?></p>
				<p><a href="/user/update">Edit</a> - <a href="/user/password">Password change</a></p>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
