<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<section>
		<div class="card">
			<div class="card-header">
				<h1>Home page</h1>
			</div>
			<div class="card-body">
				This is the home page!
				<?php
					$session = \Config\Services::session();
					echo $session->get('username');
				?>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
