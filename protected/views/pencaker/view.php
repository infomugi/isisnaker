<?php
/* @var $this PencakerController */
/* @var $model Pencaker */

$this->breadcrumbs=array(
	'Pencakers'=>array('index'),
	$model->kd_pencaker,
	);

$this->pageTitle='Detail Pencaker';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Tambah',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat','title'=>'Tambah Pencaker'));
		?>
		<?php echo CHtml::link('List',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Pencaker'));
			?>
			<?php echo CHtml::link('Kelola',
				array('kelola'),
				array('class' => 'btn btn-success btn-flat','title'=>'Kelola Pencaker'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->kd_pencaker,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Pencaker'));
						?>
						<?php echo CHtml::link('Hapus', 
							array('delete', 'id'=>$model->kd_pencaker,
								),  array('class' => 'btn btn-warning btn-flat', 'title'=>'Hapus Pencaker'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											
											'nomorkartukuning',
											'nik',
											'nama',
											'tempatlahir',
											'tgllahir',
												array(
												'label'=>'Jenis Kelamin',
												'value'=>$model->jeniskelamin == 1 ? "Laki-Laki" : "Perempuan",					
												'htmlOptions'=>array(
													'style' =>'width: 133px; color: red;')	
												),											 
											array('name'=>'kd_statusnikah','value'=>$model->Statusnikah->nama),
											array('name'=>'kd_pendidikan','value'=>$model->Pendidikan->nama),
											array('name'=>'kd_agama','value'=>$model->Agama->nama),
											// array('name'=>'kd_desa','value'=>$model->Desa->nama),
											array('name'=>'kd_jurusanpendidikan','value'=>$model->Jurusan->nama),

											'instansi',
											'tahun',
											'telpongenggam',
											'email',
											'ipk',
											'tb',
											'bb',

											// 'waktuupdate',
											// 'kd_operator',
											// 'migrasi',
											// 'waktumigrasi',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:200px;}
										</STYLE>

