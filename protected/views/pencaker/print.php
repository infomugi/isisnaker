<?php
/* @var $this PencakerController */
/* @var $model Pencaker */

$this->breadcrumbs=array(
	'Pencakers'=>array('index'),
	$model->kd_pencaker,
	);

$this->pageTitle='Data Pencaker - '.$model->nama;
?>

<h1>Data Pribadi <B><?php echo $model->nama; ?></B></h1>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											
											// 'nomorkartukuning',
											// 'nik',
											'nama',
											'tempatlahir',
											'tgllahir',
											array('label'=>'Usia','value'=>Pencaker::model()->countBirth($model->tgllahir)),

												array(
												'label'=>'Jenis Kelamin',
												'value'=>$model->jeniskelamin == 1 ? "Laki-Laki" : "Perempuan",					
												'htmlOptions'=>array(
													'style' =>'width: 133px; color: red;')	
												),											 
											array('name'=>'kd_statusnikah','value'=>$model->Statusnikah->nama),
											array('name'=>'kd_pendidikan','value'=>$model->Pendidikan->nama),
											array('name'=>'kd_agama','value'=>$model->Agama->nama),
											array('name'=>'kd_desa','value'=>$model->Desa->nama),
											array('name'=>'kd_jurusanpendidikan','value'=>$model->Jurusan->nama),

											'instansi',
											'tahun',
											'telpongenggam',
											'email',
											// 'ipk',
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

