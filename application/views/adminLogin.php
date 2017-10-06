<div>
	<div class="bg-img">
		<img src="<?php echo base_url(); ?>html/images/adminBg.jpg">
	</div>
	<div class="login-area">
		<div class="login-box">
			<form name="adminLogin" method="post">
				<div class="input-field col s6">
		          <input id="email" type="email" class="validate" required="required">
		          <label for="email">E-mail</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="last_name" type="password" class="validate" required="required">
		          <label for="last_name">Passwords</label>
		        </div>
		        <div class="input-field col s12">
		          <input type="button" name="login" value="Login" class="btn btn-adminLogin">
		        </div>
			</form>
		</div>
	</div>
</div>