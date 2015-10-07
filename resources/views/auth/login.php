
<?php
echo view('header');
echo view('menu');
echo view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('login')]);
?>

<div class="container">

	<div class="row">
		<div class="twelve columns" align="center"><h4>Login</h4></div>
	</div>

	<?php echo Form::open(array('url'=>'/auth/login')) ?>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('email','Email:') ?></div>
		<div class="one-half column input-div"><?php echo Form::text('email') ?></div>
	</div>
			
	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('password','Password:') ?></div>
		<div class="one-half column input-div"><?php echo Form::password('password') ?></div>
	</div>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('remember','Remember:') ?></div>
		<div class="one-half column input-div"><?php echo Form::checkbox('remember') ?></div>
	</div>

	<div class="row">
		<div class="one-half column">&nbsp;</div>
		<div class="one-half column" align="left">
			<?php echo Form::submit('Login',['class'=>'button-primary']) ?>
			<a href="<?php echo url('auth/register') ?>" class="button">register</a>
		</div>
	</div>
	

	<?php echo Form::close() ?>

</div>

<?php echo view('footer') ?>
