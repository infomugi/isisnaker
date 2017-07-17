<?php
/* @var $this SerikatController */
/* @var $model Serikat */

$this->breadcrumbs=array(
	'Serikat Pekerja'=>array('daftar'),
	'Tambah',
	);

	$this->pageTitle='Tambah Serikat';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>