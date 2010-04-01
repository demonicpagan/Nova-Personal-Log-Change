<?php echo text_output($header, 'h1', 'page-head');?>

<p class="bold"><?php echo anchor('manage/logs', $label['back']);?></p>

<?php echo form_open('manage/logs/edit/'. $id .'/update');?>
	<p>
		<kbd><?php echo $label['status'];?></kbd>
		<?php if ($this->auth->get_access_level() == 2): ?>
			<?php echo form_dropdown('log_status', $status, $inputs['status']);?>
		<?php else: ?>
			<?php echo text_output(ucfirst($inputs['status']), ''); ?>
			<?php echo form_hidden('log_status', $inputs['status']);?>
		<?php endif; ?>
	</p><br />

	<p>
		<kbd><?php echo $label['author'];?></kbd>
		<?php if ($this->auth->get_access_level() == 2): ?>
			<?php echo form_dropdown('log_author', $all, $inputs['author']);?>
		<?php else: ?>
			<?php echo text_output($inputs['character'], ''); ?>
			<?php echo form_hidden('log_author', $inputs['author']);?>
		<?php endif; ?>
	</p>
	<p>
		<kbd><?php echo $label['title'];?></kbd>
		<?php echo form_input($inputs['title']);?>
	</p>
	<p>
		<kbd><?php echo $label['location'];?></kbd>
		<?php echo form_input($inputs['location']);?>
	</p>
	<p>
		<kbd><?php echo $label['stardate'];?></kbd>
		<?php echo form_input($inputs['stardate']);?>
	</p>
	<p>
		<kbd><?php echo $label['content'];?></kbd>
		<?php echo form_textarea($inputs['content']);?>
	</p>
	<p>
		<kbd><?php echo $label['tags'];?></kbd>
		<?php echo text_output($label['tags_inst'], 'span', 'fontSmall gray bold');?><br />
		<?php echo form_input($inputs['tags']);?>
	</p><br />

	<p><?php echo form_button($buttons['update']);?></p>
<?php echo form_close();?>