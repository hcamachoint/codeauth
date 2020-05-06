<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<section>
		<div class="card">
			<div class="card-header">
				<h1>Password change</h1>
			</div>
			<div class="card-body">
				<form method="post">
					<?= csrf_field() ?>
					<div class="form-group">
							<input type="password" name="password" minlength="6" maxlength="100" placeholder="Password" required>
							<span class="text-error"><?= \Config\Services::validation()->getError('password'); ?></span>
					</div>
					<div class="form-group">
							<input type="password" name="password_confirm" minlength="6" maxlength="100" placeholder="Password confirmation" required>
							<span class="text-error"><?= \Config\Services::validation()->getError('password_confirm'); ?></span>
					</div>
					<div class="form-group">
							<input type="submit" name="send" value="Send">
					</div>
				</form>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>
