<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1>Profile update</h1>
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
                <input type="submit" class="btn btn-success" name="send" value="Send">
            </div>
						<p><a href="/user/profile" class="btn btn-dark">Back</a></p>
        </form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>
