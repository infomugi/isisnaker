<?php
/* @var $this IndustriController */
/* @var $model Industri */

$this->breadcrumbs=array(
	'Industris'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Industri';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>