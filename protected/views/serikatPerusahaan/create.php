<?php
/* @var $this SerikatPerusahaanController */
/* @var $model SerikatPerusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaans'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah SerikatPerusahaan';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>