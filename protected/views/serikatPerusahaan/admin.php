<?php
/* @var $this Serikat PerusahaanController */
/* @var $model Serikat Perusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaan'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Serikat Perusahaan';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Serikat Perusahaan',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Serikat Perusahaan',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'serikat-perusahaan-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'id_serikat_perusahaan',
						'serikat_id',
						'perusahaan_id',
						'status',
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>
						
					</section>