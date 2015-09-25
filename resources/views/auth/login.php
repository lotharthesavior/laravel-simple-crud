
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script stc="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php echo Form::open(array('url'=>'/auth/login')) ?>

Email: <?php echo Form::text('email') ?>

Password: <?php echo Form::password('password') ?>

Remember: <?php echo Form::checkbox('remember') ?>

<?php echo Form::submit('Login') ?>

<?php echo Form::close() ?>
