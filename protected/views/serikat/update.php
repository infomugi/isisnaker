<?php
/* @var $this SerikatController */
/* @var $model Serikat */

$this->breadcrumbs=array(
	'Serikat Pekerja'=>array('daftar'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
	);

	$this->pageTitle='Edit Serikat';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>