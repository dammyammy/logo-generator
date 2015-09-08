<?php 

include 'views/header.php'; 

$img = isset($_POST['img_val']) ? $_POST['img_val'] : false;

if ($img == false) return header('Location: /');
?>

<h1 class="cover-heading">Here is your awesome logo ready for download.</h1>
<div class="pt30"></div>

<img class="img-thumbnail" src="<?= $img; ?>" /><div class="pt30"></div>

<div class="row">
	<p class="lead">
		<a target="_blank" download href="<?= $img; ?>" class="btn btn-lg btn-max">Download Logo <i class="fa fa-download"></i></a>
	</p>
</div>

<?php include 'views/footer.php'; ?>