<div class="container">
	<p>
		<?php if ($success) : ?>
			Form submitted successfully
		<?php else : ?>
			There were some errors
			<p><?php echo $error_message ?></p>
		<?php endif; ?>
	</p>
</div>