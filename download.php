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
		<a target="_blank" download href="<?= $img; ?>" class="btn btn-lg btn-max">Download Transparent Logo <i class="fa fa-download"></i></a>
	</p>
</div>

<div class="row">
	<div class="col-md-12">
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		</div>
		<form action="//techcompanionng.us3.list-manage.com/subscribe/post?u=22d81c787c7329459bc022a30&amp;id=71da18cb35" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    	<div id="mc_embed_signup_scroll">
				<p class="lead">Did you find this tool Helpful?  Wanna be kept informed? </p>

				<div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6 mce-field-group input-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
					<input type="email" value="" name="EMAIL" required class="text-center form-control required email" placeholder="name@domain.com" id="mce-EMAIL">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_22d81c787c7329459bc022a30_71da18cb35" tabindex="-1" value=""></div>
			    <div class="col-md-offset-5 col-md-2 col-sm-offset-4 col-xs-offset-2 col-xs-8 col-sm-6 clear">
			    	<input type="submit" value="Subscribe For Updates" name="subscribe" id="mc-embedded-subscribe" class="btn btn-max">
			    </div>
		    </div>
		</form>
	</div>
	<!--End mc_embed_signup-->
</div>

<?php include 'views/footer.php'; ?>