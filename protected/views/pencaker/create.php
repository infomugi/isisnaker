<?php
/* @var $this PencakerController */
/* @var $model Pencaker */

$this->breadcrumbs=array(
	'Pencakers'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Pencaker';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>