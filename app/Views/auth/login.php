<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <div class="container">
    <div class="card">
    	<div class="card-header">
    		<h1>Login Page</h1>
    	</div>

    	<div class="card-body">
            <form method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" minlength="3" maxlength="30" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" minlength="6" maxlength="100" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" name="send" value="Send">

                </div>
            </form>
    	</div>
    </div>
  </div>
<?= $this->endSection() ?>
