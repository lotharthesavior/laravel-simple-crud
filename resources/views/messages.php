
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
					<div class="three columns"><h4>Messages</h4></div>
					<div class="six columns list-message-slot">
						<?php echo ($message)?$message:'&nbsp;' ?>
					</div>
					<div class="three columns aside-list-title">
						<a href="<?php echo url('newmessage') ?>" class="button">new message</a>
					</div>
				</div>
			</div>

			<table class="u-full-width">
				<thead>
					<tr>
						<th>Title</th>
						<th>Message</th>
						<th class="list-options-column">Options</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($messages as $message) { ?>
					<tr>
						<td><?php echo $message->title ?></td>
						<td><?php echo substr($message->message,0,80).'...' ?></td>
						<td class="list-options-column">
							<a href="<?php echo url('editmessage/'.$message->id) ?>" class="button button-primary list-button">Edit</a>&nbsp;&nbsp;
							<?php 
							echo Form::open(array('url'=>'deletemessage/'.$message->id,
												  'method'=>'delete',
												  'onsubmit'=>'return confirm("Really want to remove this?")',
												  'class'=>'list-delete-option-form'));
							echo Form::submit('delete', array('class'=>'button list-button danger-button'));
							echo Form::close(); 
							?>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>

</div>

<?php echo $footer ?>
