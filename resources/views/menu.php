<ul>
	<li>
		<?php if( Auth::check() ){ ?>
			<?php echo Auth::user()->name ?>&nbsp;<a href="<?php echo url('auth/logout') ?>">Logout</a>
		<?php }else{ ?>
			<a href="<?php echo url('auth/login') ?>">Login</a>
		<?php } ?>
	</li>
	<li><a href="<?php echo url('messages') ?>">Messages</a></li>
	<!-- <li></li> -->
</ul>