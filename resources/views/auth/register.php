
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script stc="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php echo Form::open(array('url'=>'/auth/register')) ?>

Name: <?php echo Form::text('name') ?>

Email: <?php echo Form::text('email') ?>

Password: <?php echo Form::password('password') ?>

Password Confirmation: <?php echo Form::password('password_confirmation') ?>

<?php echo Form::submit('Login') ?>

<?php echo Form::close() ?>
