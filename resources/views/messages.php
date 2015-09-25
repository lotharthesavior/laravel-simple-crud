
<?php echo $header; ?>
<?php echo $menu; ?>

<div class="container">

Messages: <a href="<?php echo url('newmessage') ?>">(new message)</a> <?php echo $message ?>

<table class="table">
	<tr>
		<th>Title</th>
		<th>Message</th>
		<th>Options</th>
	</tr>
	<?php foreach ($messages as $message) { ?>
	<tr>
		<td><?php echo $message->title ?></td>
		<td><?php echo substr($message->message,0,80).'...' ?></td>
		<td>
			<a href="<?php echo url('editmessage/'.$message->id) ?>" class="btn btn-primary">[edit]</a>&nbsp;&nbsp;
			<?php echo Form::open(array('url'=>'deletemessage/'.$message->id,'method'=>'delete','onsubmit'=>'return confirm("Really want to remove this?")')) ?>
				<?php echo Form::submit('[delete]', array('class'=>'btn btn-danger')) ?>
			<?php echo Form::close() ?>
		</td>
	</tr>
	<?php } ?>
</table>

</div>
