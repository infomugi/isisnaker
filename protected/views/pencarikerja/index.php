<?php
/* @var $this Pencari KerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pencari Kerjas',
	);

$this->pageTitle='Daftar Pencari Kerja';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pencari Kerja',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Pencari Kerja',
			array('kelola'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view',
					)); ?>

				</section>