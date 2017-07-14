<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->kd_kecamatan,
	);

	$this->pageTitle='Detail Kecamatan';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah Kecamatan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Kecamatan'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Kecamatan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->kd_kecamatan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Kecamatan'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->kd_kecamatan,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Kecamatan'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'kd_kecamatan',
		'mnemonic',
		'kd_areasurvey',
		'nama',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

