<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="<?php echo base_url('app.css')?>">
</head>
<body>
    <?= $this->include('templates/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('templates/footer') ?>
    <script src="<?php echo base_url('app.js')?>"></script>
</body>
</html>
