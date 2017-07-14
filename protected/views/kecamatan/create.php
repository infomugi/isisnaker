<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Kecamatan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>