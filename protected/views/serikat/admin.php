<?php
/* @var $this SerikatController */
/* @var $model Serikat */

$this->breadcrumbs=array(
	'Serikats'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Serikat';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Serikat',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Serikat',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'serikat-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						// 'id',
						'kode',
						'nama',
						// 'alamat',
						// 'kontak',
						// 'kategori_id',
						// 'kecamatan_id',
						// 'status',
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>