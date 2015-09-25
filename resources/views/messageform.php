<?php echo $header; ?>
<?php echo $menu; ?>

<div class="container">

<?php echo ( $message_model->id )?'Edit':'New' ?> Message&nbsp;&nbsp;<?php echo ($message)?$message:''; ?>

<?php 
if( $message_model->id ){
	echo Form::open(array('url'=>'/editmessage/'.$message_model->id, 'method'=>'put'));
	echo Form::hidden('id',$message_model->id);
}else{
	echo Form::open(array('url'=>'/newmessage', 'method'=>'post'));
}
echo Form::hidden('user_id', 1);
?>
<table class="table">
	<tr>
		<td><?php echo Form::label('title','Title:') ?></td>
		<td><?php echo Form::text('title',$message_model->title) ?></td>
	</tr>
	<tr>
		<td><?php echo Form::label('message','Message:') ?></td>
		<td><?php echo Form::text('message',$message_model->message) ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
		<?php 
			if( $message_model->id ){
				echo Form::submit('Edit');
			}else{
				echo Form::submit('Create!');
			} 
		?>
		</td>
	</tr>
</table>
<?php echo Form::close() ?>