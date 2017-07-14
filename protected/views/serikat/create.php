<?php
/* @var $this SerikatController */
/* @var $model Serikat */

$this->breadcrumbs=array(
	'Serikats'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Tambah Serikat';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>