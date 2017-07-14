<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Perusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>