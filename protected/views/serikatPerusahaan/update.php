<?php
/* @var $this SerikatPerusahaanController */
/* @var $model SerikatPerusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaans'=>array('index'),
	$model->id_serikat_perusahaan=>array('view','id'=>$model->id_serikat_perusahaan),
	'Update',
	);

	$this->pageTitle='Edit SerikatPerusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>