<?php 
require __DIR__ . '/vendor/autoload.php';
include_once 'views/header.php'; 
?>

<div class="pt30 pb30"></div>

<div class="row">
	<div class="pt30"></div>
	<div class="col-md-offset-2 col-md-8">
		
	</div>
</div>

<div class="pt30"></div>

<div class="row">
	<p class="lead">
		<?php echo mailto('dami@ogunmoye.com', 'Send Dammy an Email'); ?>
		<?php echo mailto('rasban037@yahoo.com', 'Send RasBan an Email'); ?>
	</p>
</div>

<?php include_once 'views/footer.php'; ?>