<?php
/* @var $this TextController */
/* @var $model Text */

$this->breadcrumbs=array(
	'Texts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Text', 'url'=>array('index')),
	array('label'=>'Create Text', 'url'=>array('create')),
	array('label'=>'Update Text', 'url'=>array('update', 'id'=>$model->id_text)),
	array('label'=>'Delete Text', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_text),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Text', 'url'=>array('admin')),
);
?>

<h1>View Text #<?php echo $model->id_text; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_text',
		'title',
		'content',
		'created',
		'status',
		'category_id',
	),
)); ?>
