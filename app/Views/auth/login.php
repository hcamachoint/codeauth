<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <section>
    <div class="card">
    	<div class="card-header">
    		<h1>Login Page</h1>
    	</div>

    	<div class="card-body">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" name="send" value="Send">

                </div>
            </form>
    	</div>
    </div>
  </section>
<?= $this->endSection() ?>
