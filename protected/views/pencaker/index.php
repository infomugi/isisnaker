<?php
/* @var $this PencakerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pencakers',
	);

	$this->pageTitle='Daftar Pencaker';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Pencaker',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Pencaker',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>