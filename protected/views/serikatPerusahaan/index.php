<?php
/* @var $this SerikatPerusahaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serikat Perusahaans',
	);

	$this->pageTitle='Daftar SerikatPerusahaan';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah SerikatPerusahaan',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola SerikatPerusahaan',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>