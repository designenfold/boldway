<?php if(boldway_config('header_login_register') == true): ?>
<div class="login-register-area">
	<?php if(is_user_logged_in() == false): ?>
        <a href="<?php echo boldway_config('header_login_url'); ?>" class="login">Login</a>
        <a href="<?php echo boldway_config('header_register_url'); ?>" class="register">Register</a>
    <?php else: ?>
    	 <a href="<?php echo boldway_config('header_logout_url'); ?>" class="login">Logout</a>
        <a href="<?php echo boldway_config('header_account_url'); ?>" class="register">Account</a>
    <?php endif; ?>
</div>
<?php endif; ?>