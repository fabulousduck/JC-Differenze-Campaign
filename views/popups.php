<?php

?>

<div id="login" class="login-popup">
	<div class="popup">
		<h2>Log In</h2>
	    <div class="close"><i class="fa fa-times"></i></div>
		<div class="content">
            <form>
                <div class="block">
                    <label>Username</label>
                    <input type="text"/>
                </div>
                <div class="block">
                    <label>Password</label>
                    <input type="password"/>
                </div>
                <div class="btn">
                    <a href="#"> Log In</a>
                </div>
                <div class="href">
                    <a href="#"><span>Forgot Password?</span></a>
                </div>
            </form>
		</div>
	</div>
</div>

<div id="language" class="language-popup">
	<div class="popup">
		<h2>Language</h2>
		<div class="closeTwo"><i class="fa fa-times"></i></div>
		<div class="content">
                <?php echo langDataGrep(); ?>
		</div>
	</div>
</div>