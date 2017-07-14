<?php
/* @var $this Pencari KerjaController */
/* @var $model Pencari Kerja */

$this->breadcrumbs=array(
	'Pencari Kerjas'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Pencari Kerja';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pencari Kerja',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Pencari Kerja',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

		<?php echo CHtml::link('Laporan Pencari Kerja',
			array('report'),
			array('class' => 'btn btn-success btn-flat'));
			?>			

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'Pencari Kerja-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						// 'nomor',
						'tanggal',
						'nomorpencaker',
						// 'nomorktp',
						'nama',
						array('name'=>'tanggallahir','value'=>'Pencaker::model()->countBirth($data->tanggallahir)'),
						// 'tempattanggallahir',
						// 'tanggallahir',
						'jeniskelamin',
						'status',
						// 'agama',
						// 'alamat',
						'kecamatan',
						// 'sd',
						// 'smp',
						// 'sma',
						// 'diploma',
						// 's1',
						// 's2',
						// 'tahunlulus',
						// 'almamater',
						// 'jurusan',
						// 'ipk',
						'tb',
						'bb',
						// array('header'=>'BMI','value'=>'Pencaker::model()->countBmi($data->tb,$data->tb)'),
						'nomorhp',

						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>