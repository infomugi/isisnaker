<?php
/* @var $this Serikat PerusahaanController */
/* @var $model Serikat Perusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaan'=>array('index'),
	$model->id_serikat_perusahaan=>array('view','id'=>$model->id_serikat_perusahaan),
	'Update',
	);

$this->pageTitle='Edit Serikat Perusahaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>