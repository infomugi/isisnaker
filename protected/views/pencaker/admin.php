<?php
/* @var $this PencakerController */
/* @var $model Pencaker */

$this->breadcrumbs=array(
	'Pencakers'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Pencaker';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pencaker',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Pencaker',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'pencaker-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table table-bordered table-striped dataTable table-hover',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'nomorkartukuning',
						'nama',

						// 'tempatlahir',
						// 'tgllahir',
						// 'jeniskelamin',

						array('name'=>'tgllahir','value'=>'Pencaker::model()->countBirth($data->tgllahir)'),
						array('name'=>'kd_desa','value'=>'$data->Desa->nama'),
						array('name'=>'kd_pendidikan','value'=>'$data->Pendidikan->nama'),
						array('name'=>'kd_jurusanpendidikan','value'=>'$data->Jurusan->nama'),

						/*
						'kd_statusnikah',
						'kd_pendidikan',
						'kd_jurusanpendidikan',
						'instansi',
						'tahun',
						'kd_agama',
						'kd_pekerjaan',
						'nik',
						'telpongenggam',
						'email',
						'ipk',
						'tb',
						'bb',
						'waktuupdate',
						'kd_operator',
						'migrasi',
						'waktumigrasi',
						*/
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>