<div class="container">
	<div class="row menu">
		<div class="one-half column menu-side">
			<ul>
				<li><a href="<?php echo url('/') ?>">Home</a></li>
				<li><a href="<?php echo url('messages') ?>">Messages</a></li>
			</ul>
		</div>
		<div class="one-half column auth-side">
			<?php if( Auth::check() ){ ?>
				<?php echo Auth::user()->name ?>&nbsp;<a href="<?php echo url('auth/logout') ?>">Logout</a>
			<?php }else{ ?>
				<a href="<?php echo url('auth/login') ?>">Login</a>
			<?php } ?>
		</div>
	</div>
</div>