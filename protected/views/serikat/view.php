<?php
/* @var $this SerikatController */
/* @var $model Serikat */

$this->breadcrumbs=array(
	'Serikats'=>array('index'),
	$model->id,
	);

	$this->pageTitle='Detail Serikat';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Serikat'));
		 ?>
		 		<?php echo CHtml::link('Tambahkan Perusahaan',
	 array('serikatperusahaan/tambah', 'id'=>$model->id),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambahkan Perusahaan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Serikat'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Serikat'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Serikat'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Serikat'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						// 'id',
		'kode',
		'nama',
		'alamat',
		'kontak',
		// 'kategori_id',
		// 'kecamatan_id',
		// 'status',
				),
				)); ?>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'perusahaan-grid',
						'dataProvider'=>$dataProvider,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							array('header'=>'Nama Perusahaan','value'=>'$data->Perusahaan->nama'),
							// array('header'=>'Pimpinan','value'=>'$data->Perusahaan->pimpinan'),
							array('header'=>'Alamat','value'=>'$data->Perusahaan->alamat'),
							array('header'=>'Kecamatan','value'=>'$data->Perusahaan->kecamatan'),
							array('header'=>'Jenis Usaha','value'=>'$data->Perusahaan->jenis_usaha'),
						
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}{delete}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("perusahaan/view", array("id"=>$data->Perusahaan->id))',
										),
									'delete'=>
									array(
										'url'=>'Yii::app()->createUrl("serikatperusahaan/delete", array("id"=>$data->id_serikat_perusahaan))',
										),									
									),
								),
							),
							)); ?>



						

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

