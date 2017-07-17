<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaan'=>array('daftar'),
	$model->id=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>