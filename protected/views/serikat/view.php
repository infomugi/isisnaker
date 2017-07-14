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
						'id',
		'kode',
		'nama',
		'alamat',
		'kontak',
		'kategori_id',
		'kecamatan_id',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

