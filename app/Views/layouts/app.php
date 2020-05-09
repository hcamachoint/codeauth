<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_ENV['app.name'] ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/app.css')?>">
</head>
<body class="d-flex flex-column h-100">
    <?= $this->include('templates/header') ?>

		<div class="messages" style="margin-top: 60px;margin-bottom: -60px">
			<?php if(session()->getFlashdata('success')) : ?>
				<div class="alert alert-success" role="alert">
							<?= session()->getFlashdata('success') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php elseif(session()->getFlashdata('warning')) : ?>
				<div class="alert alert-warning" role="alert">
							<?= session()->getFlashdata('warning') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php elseif(session()->getFlashdata('error')) : ?>
				<div class="alert alert-danger" role="alert">
							<?= session()->getFlashdata('error') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif ?>
		</div>

		<main role="main" class="flex-shrink-0">
    	<?= $this->renderSection('content') ?>
		</main>

		<?= $this->include('templates/footer') ?>

		<script src="<?= base_url('js/jquery-3.2.1.slim.min.js')?>"></script>
		<script src="<?= base_url('js/popper.min.js')?>"></script>
		<script src="<?= base_url('js/bootstrap.min.js')?>"></script>
</body>
</html>
