<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <div class="container">
    <div class="card">
    	<div class="card-header">
    		<h1>Register Page</h1>
    	</div>

    	<div class="card-body">
            <form method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" minlength="3" maxlength="30" placeholder="First Name" required>
                    <span class="text-error"><?= \Config\Services::validation()->getError('firstname'); ?></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastname" minlength="3" maxlength="30" placeholder="Last Name" required>
                    <span class="text-error"><?= \Config\Services::validation()->getError('lastname'); ?></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" minlength="3" maxlength="30" placeholder="Username" required>
                    <span class="text-error"><?= \Config\Services::validation()->getError('username'); ?></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" minlength="5" maxlength="50" placeholder="Email" required>
                    <span class="text-error"><?= \Config\Services::validation()->getError('email'); ?></span>
                </div>
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
  </div>
<?= $this->endSection() ?>
