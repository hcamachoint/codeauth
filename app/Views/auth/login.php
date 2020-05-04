<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <section>
    <div class="card">
    	<div class="card-header">
    		<h1>Login Page</h1>
    	</div>

    	<div class="card-body">
          <?php
            $session = \Config\Services::session();
            if (!empty($session->getFlashdata('success'))){
              echo '<label class="text-success">'.$session->getFlashdata('success').'</label>';
            }
            if (!empty($session->getFlashdata('warning'))){
              echo '<label class="text-warning">'.$session->getFlashdata('warning').'</label>';
            }
            if (!empty($session->getFlashdata('error'))){
              echo '<label class="text-error">'.$session->getFlashdata('error').'</label>';
            }
          ?>
            <form method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" name="username" minlength="3" maxlength="30" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" minlength="6" maxlength="100" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" value="Send">

                </div>
            </form>
    	</div>
    </div>
  </section>
<?= $this->endSection() ?>
