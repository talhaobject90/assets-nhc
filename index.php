<?php 
	include_once('header-login.php');
 
	?>
	<link href="https://d1n8cmjuqlpe9.cloudfront.net/assets/pages-828f554b651b4888b7e729a15a2891bb.css" media="screen" rel="stylesheet" />
	<section id="session">
<div class="container">
<div class="row">
<div id="notices">
 </div>

</div>
<div class="row">
<form accept-charset="UTF-8" action="https://pomsapp.com/session" class="form-signin" id="new_signin_form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="C3auzP3qaTSWuVBRCwrtcNNYRfgHlDPbUKYgHf54RUg="></div><h2 class="form-signin-heading">
<a href="https://pomsapp.com/">New Horiozons Company</a>
</h2>
<input class="form-control" id="signin_form_email" name="signin_form[email]" placeholder="Your email" type="text">
<input class="form-control" id="signin_form_password" name="signin_form[password]" placeholder="Your password" type="password">
<div class="footer">

<a href="assets_monitor.php" class="btn btn-yellow btn-md">Login</a>
<!-- <button class="btn btn-yellow btn-md" data-disable-with="Loading..." name="button" type="submit">Login</button> -->
<a class="btn btn-link forgot-pwd-link" data-url="https://pomsapp.com/reset_passwords/new" href="javascript:">forgot password</a>
</div>
</form>

</div>
</div>
</section>
	
	<?php   include_once('footer-pop.php'); ?>