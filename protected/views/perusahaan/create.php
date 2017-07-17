<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaan'=>array('daftar'),
	'Add',
	);

	$this->pageTitle='Add Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>