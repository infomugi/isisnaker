<?php
/* @var $this SerikatPerusahaanController */
/* @var $model SerikatPerusahaan */

$this->breadcrumbs=array(
	'Serikat Perusahaans'=>array('index'),
	$model->id_serikat_perusahaan,
	);

	$this->pageTitle='Detail SerikatPerusahaan';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Tambah',
	 array('tambah'),
 array('class' => 'btn btn-success btn-flat','title'=>'Tambah SerikatPerusahaan'));
		 ?>
		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar SerikatPerusahaan'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola SerikatPerusahaan'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_serikat_perusahaan,
		), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit SerikatPerusahaan'));
 ?>
		<?php echo CHtml::link('Hapus', 
	 array('delete', 'id'=>$model->id_serikat_perusahaan,
		),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus SerikatPerusahaan'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_serikat_perusahaan',
		'serikat_id',
		'perusahaan_id',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

