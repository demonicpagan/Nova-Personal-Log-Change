<?php echo text_output($header, 'h1', 'page-head');?>

<?php echo form_open($form_action);?>
	<p>
		<kbd><?php echo $label['author'];?></kbd>
		<?php if (isset($characters)): ?>
			<?php echo form_dropdown('author', $characters, $key, 'class="chosen"');?>
		<?php else: ?>
			<?php echo text_output($character['name'], ''); ?>
			<?php echo form_hidden('author', $character['id']);?>
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
		<?php echo text_output($label['tags_sep'], 'span', 'fontSmall gray bold');?><br />
		<?php echo form_input($inputs['tags']);?>
		<?php echo img($images['help']);?>
	</p><br />

	<p>
		<?php echo form_button($inputs['post']);?>
		&nbsp;
		<?php echo form_button($inputs['save']);?>

		<?php if ($this->uri->segment(3) !== FALSE): ?>
			&nbsp;
			<?php echo form_button($inputs['delete']);?>
		<?php endif; ?>
	</p>
<?php echo form_close();?>