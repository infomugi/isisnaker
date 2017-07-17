<?php
/* @var $this SerikatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Serikat Pekerja',
	);

$this->pageTitle='Daftar Serikat';
?>

<?php echo CHtml::link('Tambah Serikat',
	array('tambah'),
	array('class' => 'btn btn-success btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Serikat',
		array('kelola'),
		array('class' => 'btn btn-success btn-flat'));
		?>

		<HR>

			<div class="milestone-list-container">
				<ul class="list-group milestone-list row no-margin">
					
					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>

					</ul>
				</div>