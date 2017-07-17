<?php
/* @var $this IndustriController */
/* @var $model Industri */

$this->breadcrumbs=array(
	'Industri'=>array('daftar'),
	'Tambah',
	);

	$this->pageTitle='Tambah Industri';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>