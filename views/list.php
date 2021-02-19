<div class="container">
	<h2>List of submitted contact requests</h2>
	<!-- List -->
	<div class="contact-requests-list">
		<?php foreach ($contact_requests as $request) : ?>
			<div class="contact-request">
				<p><?php echo $request->getFirstName(); ?></p>
				<p><?php echo $request->getLastName(); ?></p>
				<p><?php echo $request->getEmail(); ?></p>
				<p><?php echo $request->getSubject(); ?></p>
				<p><?php echo $request->getMessage(); ?></p>
				<hr>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<script src="" async defer></script>