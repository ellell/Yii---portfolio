<div class="view">
	<?php echo CHtml::encode($data->text); ?>
	<br />
	<?php echo CHtml::link(CHtml::encode("edit"), array('update', 'id'=>$data->id)); ?>
	<br />
</div>
