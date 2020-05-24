<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer class="footer mt-auto py-3">
	<div align="center">
		<?php if(ENVIRONMENT == 'development') : ?>
			<p>Page rendered in {elapsed_time} seconds / Environment: <?= ENVIRONMENT ?></p>
		<?php endif ?>
		<p>&copy; <?= date('Y') ?> <?= getenv('app.name') ?>.</p>
	</div>
</footer>
