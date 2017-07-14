<?php
/* @var $this SerikatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serikats',
	);

	$this->pageTitle='Daftar Serikat';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Serikat',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Serikat',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>