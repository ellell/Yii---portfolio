
<h1>Update about</h1>
<p>Edit infotext that appears on first page. </p>

<?php 

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
