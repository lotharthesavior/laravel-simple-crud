
<?php
echo view('header');
echo view('menu');
echo view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('register')]);
?>

<div class="container">

	<div class="row">
		<div class="twelve columns" align="center"><h4>Register</h4></div>
	</div>

	<?php echo Form::open(array('url'=>'/auth/register')) ?>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('name','Name:') ?></div>
		<div class="one-half column" align="left"><?php echo Form::text('name') ?></div>
	</div>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('email','Email:') ?></div>
		<div class="one-half column" align="left"><?php echo Form::text('email') ?></div>
	</div>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('password','Password:') ?></div>
		<div class="one-half column" align="left"><?php echo Form::password('password') ?></div>
	</div>

	<div class="row">
		<div class="one-half column label-div"><?php echo Form::label('password_confirmation','Password Confirmation:') ?></div>
		<div class="one-half column" align="left"><?php echo Form::password('password_confirmation') ?></div>
	</div>

	<div class="row">
		<div class="one-half column">&nbsp;</div>
		<div class="one-half column" align="left"><?php echo Form::submit('Register',['class'=>'button-primary']) ?></div>
	</div>

	<?php echo Form::close() ?>

</div>

<?php echo view('footer') ?>