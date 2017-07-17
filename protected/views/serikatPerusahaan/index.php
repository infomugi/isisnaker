<?php
/* @var $this Serikat PerusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serikat Perusahaan',
	);

	$this->pageTitle='Daftar Serikat Perusahaan';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Serikat Perusahaan',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Serikat Perusahaan',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>