<?php
/* @var $this Serikat PerusahaanController */
/* @var $model Serikat Perusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaan'=>array('index'),
	'Tambah',
	);

$this->pageTitle='Tambah Serikat Perusahaan';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>