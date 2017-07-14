<?php
/* @var $this Pencari KerjaController */
/* @var $model Pencari Kerja */

$this->breadcrumbs=array(
	'Pencari Kerjas'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Pencari Kerja';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>