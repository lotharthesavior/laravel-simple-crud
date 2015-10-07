<?php 
echo $header;
echo $menu;
echo $breadcrumb; 
?>

<div class="container">

	<div class="row">
		<div class="twelve columns">
			<div class="container u-full-width">
				<div class="row">
					<div class="three columns">
						<h4><?php echo ( $message_model->id )?'Edit':'New' ?> Message</h4>
					</div>
					<div class="six columns list-message-slot"><?php echo ($message)?$message:'&nbsp;' ?></div>
					<div class="three columns">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
	if( $message_model->id ){
		echo Form::open(array('url'=>'/editmessage/'.$message_model->id, 'method'=>'put'));
		echo Form::hidden('id',$message_model->id);
	}else{
		echo Form::open(array('url'=>'/newmessage', 'method'=>'post'));
	}
	echo Form::hidden('user_id', 1);
	?>
	<div class="row">
		<div class="two columns">
			<?php echo Form::label('title','Title:') ?>
		</div>
		<div class="ten columns">
			<?php echo Form::text('title',$message_model->title) ?>
		</div>
	</div>

	<div class="row">
		<div class="two columns">
			<?php echo Form::label('message','Message:') ?>
		</div>
		<div class="ten columns">
			<?php echo Form::textarea('message',$message_model->message) ?>
		</div>
	</div>

	<div class="row">
		<div class="two columns">&nbsp;</div>
		<div class="ten columns">
			<?php 
				if( $message_model->id ){
					echo Form::submit('Edit',['class'=>'button-primary']);
				}else{
					echo Form::submit('Create!',['class'=>'button-primary']);
				} 
			?>
		</div>
	</div>
	<?php echo Form::close() ?>

</div>