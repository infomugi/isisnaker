<?php
/* @var $this PencakerController */
/* @var $model Pencaker */

$this->breadcrumbs=array(
	'Pencakers'=>array('index'),
	$model->kd_pencaker=>array('view','id'=>$model->kd_pencaker),
	'Update',
	);

	$this->pageTitle='Edit Pencaker';
	?>

	<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>