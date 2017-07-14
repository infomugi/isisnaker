<?php
/* @var $this IndustriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Industris',
	);

	$this->pageTitle='Daftar Industri';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah Industri',
 array('tambah'),
 array('class' => 'btn btn-success btn-flat'));
 ?>
		<?php echo CHtml::link('Kelola Industri',
 array('kelola'),
 array('class' => 'btn btn-success btn-flat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>