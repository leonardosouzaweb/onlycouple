<?php
$email = '';
if( route(2) !== '' ){
    $email = strrev( base64_decode( route(2) ) );
}
if( $email == '' ){
    echo "<script>window.location = window.site_url + '/forgot';</script>";
}
?>
<style>#nav-not-logged-in,.page-footer{display: none !important;visibility: hidden !important;}</style>
<!-- Header  -->
	<nav role="navigation">
        <div class="nav-wrapper container">
            <div class="left header_logo">
                <a id="logo-container" href="<?php echo $site_url;?>/" class="brand-logo"><img src="<?php echo $theme_url;?>assets/img/logo.png" /></a>
            </div>
            <ul class="right not_usr_nav">
                <li class="hide-on-med-and-down black-text"><?php echo __( 'Don\'t have an account?' ); ?></li>
				<li class="hide_mobi_login"><a href="<?php echo $site_url;?>/register" data-ajax="/register" class="btn-flat btn bold white waves-effect black-text"><?php echo __( 'Register' );?></a></li>
                <div class="show_mobi_login">
                    <a class="dropdown-trigger" href="#" data-target="log_in_dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#222" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" /></svg></a>
                    <ul id="log_in_dropdown" class="dropdown-content">
                        <li><a href="<?php echo $site_url;?>/login" data-ajax="/login"><?php echo __( 'Login' );?></a></li>
                        <li><a href="<?php echo $site_url;?>/register" data-ajax="/register"><?php echo __( 'Register' );?></a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
<!-- End Header  -->
<!-- Login  -->
	<div class="container-fluid auth_bg_img">
		<div class="usr_circle sml" style="background-image: url(<?php echo $theme_url;?>assets/img/login-sm.jpg);"></div>
		<div class="usr_circle mdm" style="background-image: url(<?php echo $theme_url;?>assets/img/login-md.jpg);"></div>
		<div class="usr_circle mlr" style="background-image: url(<?php echo $theme_url;?>assets/img/login-ml.jpg);"></div>
		<div class="usr_circle lrg" style="background-image: url(<?php echo $theme_url;?>assets/img/forgot.jpg);"></div>
        <div class="container dt_login_bg">
            <div class="section">
                <div class="dt_login_con">
                    <div class="row dt_login">
                        <form method="POST" action="Useractions/resetpassword" class="register">
                            <input type="hidden" name="email" value="<?php echo $email;?>">
                            <input type="hidden" name="email_code" value="<?php if( isset( $_COOKIE['email_code'] ) ) { echo Secure($_COOKIE['email_code']); }?>">
                            <p><span class="bold"><?php echo __( 'Password change,' );?></span> <?php echo __( 'please enter your new password to proceed.' );?></p>
                            <div class="alert alert-success" role="alert" style="display:none;"></div>
                            <div class="alert alert-danger" role="alert" style="display:none;"></div>
                            <div class="row">
                                <div class="input-field">
                                    <input id="password" name="password" type="password" class="validate" autofocus>
                                    <label for="password"><?php echo __( 'Password' );?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input id="c_password" name="c_password" type="password" class="validate">
                                    <label for="c_password"><?php echo __( 'Confirm Password' );?></label>
                                </div>
                            </div>
                            <?php if ($config->recaptcha == 'on' && !empty($config->recaptcha_secret_key) && !empty($config->recaptcha_site_key)) { ?>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="<?php echo($config->recaptcha_site_key) ?>"></div>
                                </div>
                            <?php } ?>
                            <div class="dt_login_footer valign-wrapper">
                                <button class="btn btn-large waves-effect waves-light bold btn_primary btn_round" type="submit" name="action"><span><?php echo __( 'Reset' );?></span> <svg viewBox="0 0 19 14" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path fill="currentColor" d="M18.6 6.9v-.5l-6-6c-.3-.3-.9-.3-1.2 0-.3.3-.3.9 0 1.2l5 5H1c-.5 0-.9.4-.9.9s.4.8.9.8h14.4l-4 4.1c-.3.3-.3.9 0 1.2.2.2.4.2.6.2.2 0 .4-.1.6-.2l5.2-5.2h.2c.5 0 .8-.4.8-.8 0-.3 0-.5-.2-.7z"></path></svg></button>
                            </div>
                        </form>
                    </div>		
                </div>
            </div>
        </div>
	</div>
<!-- End Login  -->

<script>
    <?php if ($config->recaptcha == 'on' && !empty($config->recaptcha_secret_key) && !empty($config->recaptcha_site_key)) { ?>
        $(document).ready(function(){
            setTimeout(() => {
                if ($('.g-recaptcha').html().length == 0) {
                    window.location.reload();
                }
            },300);
        });
    <?php } ?>
	var password = document.getElementById("password"), confirm_password = document.getElementById("c_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>     