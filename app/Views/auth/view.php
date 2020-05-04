<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
  <section>
    <?php if (! empty($user) && is_array($user)) : ?>
        <h3><?= esc($user['firstname']); ?> <?= esc($user['lastname']); ?></h3>
        <p><?= esc($user['email']); ?></p>
    <?php else : ?>
        <h3>No user found</h3>
        <p>Unable to find the user.</p>
    <?php endif ?>
  </section>
<?= $this->endSection() ?>
