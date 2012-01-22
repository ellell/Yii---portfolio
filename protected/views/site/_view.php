<div class="view">
	<?php echo CHtml::encode($data->text); ?>
	<br />
	<?php 
	if(!Yii::app()->user->isGuest){
	
	echo CHtml::link(CHtml::encode("edit"), array('update', 'id'=>$data->id)); ?>
	<br />
	<?php } ?>
</div>
