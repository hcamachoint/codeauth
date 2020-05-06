<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<meta charset="UTF-8">
	<title>CODEAUTH</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('css/app.css')?>">
</head>
<body class="d-flex flex-column h-100">
    <?= $this->include('templates/header') ?>
		<main role="main" class="flex-shrink-0">
    	<?= $this->renderSection('content') ?>
		</main>
    <?= $this->include('templates/footer') ?>
    <script src="<?php echo base_url('js/jquery-3.2.1.slim.min.js')?>"></script>
		<script src="<?php echo base_url('js/popper.min.js')?>"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
</body>
</html>
