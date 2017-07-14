<?php
/* @var $this IndustriController */
/* @var $model Industri */

$this->breadcrumbs=array(
	'Industris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Industri';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>