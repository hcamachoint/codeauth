<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <section>
    <div class="card">
    	<div class="card-header">
    		<h1>Register Page</h1>
    	</div>

    	<div class="card-body">
            <form method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" name="firstname" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirm" placeholder="Password confirmation">
                </div>
                <div class="form-group">
                    <input type="submit" name="send" value="Send">
                    <span class="text-danger"><?= \Config\Services::validation()->listErrors(); ?></span>
                </div>
            </form>
    	</div>
    </div>
  </section>
<?= $this->endSection() ?>
