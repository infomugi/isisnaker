<?php
/* @var $this KecamatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kecamatans',
	);

	$this->pageTitle='Daftar Kecamatan';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Kecamatan',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Kecamatan',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>