<?php
/* @var $this Pencari KerjaController */
/* @var $model Pencari Kerja */

$this->breadcrumbs=array(
	'Pencari Kerjas'=>array('index'),
	$model->id_pencarikerja=>array('view','id'=>$model->id_pencarikerja),
	'Update',
	);

	$this->pageTitle='Edit Pencari Kerja';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>