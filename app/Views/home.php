<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Home page</h1>
			</div>
			<div class="card-body">
				This is the home page!
				<?php
					$session = \Config\Services::session();
					echo esc($session->get('username'));
				?>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
