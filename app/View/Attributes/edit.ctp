<div class="attributes form">
<?php echo $this->Form->create('Attribute');?>
	<fieldset>
		<legend><?php echo __('Edit Attribute'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category');
		if($attachment) {
		    echo $this->Form->hidden('type');
		    echo "<BR>Type: ".$this->Form->value('Attribute.type');
		    echo $this->Form->hidden('value');
		    echo "<BR>Value: ".$this->Form->value('Attribute.value');
		} else {
    		echo $this->Form->input('type');
    		echo $this->Form->input('value');
		}
		echo $this->Form->input('to_ids', array('label' => 'IDS Signature?'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<ul>
	    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attribute.id'))); ?></li>
	    <li>&nbsp;</li>
		<?php echo $this->element('actions_menu'); ?>
	</ul>
</div>
