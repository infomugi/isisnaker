<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaan'=>array('daftar'),
	$model->id,
	);

$this->pageTitle='Detail Perusahaan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-success btn-flat','title'=>'Add Perusahaan'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-success btn-flat', 'title'=>'List Perusahaan'));
			?>
			<?php echo CHtml::link('<i class="fa fa-table"></i>',
				array('admin'),
				array('class' => 'btn btn-success btn-flat','title'=>'Manage Perusahaan'));
				?>
				<?php echo CHtml::link('<i class="fa fa-edit"></i>', 
					array('update', 'id'=>$model->id,
						), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Perusahaan'));
						?>
						<?php echo CHtml::link('<i class="fa fa-remove"></i>', 
							array('delete', 'id'=>$model->id,
								),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Perusahaan'));
								?>

							</span> 

							<span class="hidden-xs">

								<?php echo CHtml::link('Add',
									array('create'),
									array('class' => 'btn btn-success btn-flat','title'=>'Add Perusahaan'));
									?>
									<?php echo CHtml::link('List',
										array('index'),
										array('class' => 'btn btn-success btn-flat', 'title'=>'List Perusahaan'));
										?>
										<?php echo CHtml::link('Manage',
											array('admin'),
											array('class' => 'btn btn-success btn-flat','title'=>'Manage Perusahaan'));
											?>
											<?php echo CHtml::link('Edit', 
												array('update', 'id'=>$model->id,
													), array('class' => 'btn btn-info btn-flat', 'title'=>'Edit Perusahaan'));
													?>
													<?php echo CHtml::link('Delete', 
														array('delete', 'id'=>$model->id,
															),  array('class' => 'btn btn-danger btn-flat', 'title'=>'Hapus Perusahaan'));
															?>

														</span>

														<HR>
															<H2>Data Perusahaan</H2>
															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	// 'id',
																	'klui',
																	'nama',
																	'alamat',
																	'pimpinan',
																	'kecamatan',
																	'jenis_usaha',
																	'jenis_pemodalan',
																	'jumlah_tki_wanita',
																	'jumlah_tki_pria',
																	'jumlah_tka_wanita',
																	'jumlah_tka_pria',
																	'klasifikasi',
																	'perusahaan_mulai_berlaku',
																	'perusahaan_akhir_berlaku',
																	'perusahaan_nomor_sk',
																	
																	),
																	)); ?>
																	<h4>Data Serikat</h4>
																	<?php $this->widget('zii.widgets.CDetailView', array(
																		'data'=>$model,
																		'htmlOptions'=>array("class"=>"table"),
																		'attributes'=>array(
																			
																			'serikat_nama',
																			'serikat_nomor',
																			'serikat_jumlah_wanita',
																			'serikat_jumlah_pria',
																			'serikat_ketua',
																			),
																			)); ?>

																			<h4>Data Bipartit</h4>
																			<?php $this->widget('zii.widgets.CDetailView', array(
																				'data'=>$model,
																				'htmlOptions'=>array("class"=>"table"),
																				'attributes'=>array(

																					'bipartit_nomor',
																					'bipartit_mulai_berlaku',
																					'bipartit_akhir_berlaku',
																					),
																					)); ?>


																					<h4>Data Apindo</h4>
																					<?php $this->widget('zii.widgets.CDetailView', array(
																						'data'=>$model,
																						'htmlOptions'=>array("class"=>"table"),
																						'attributes'=>array(

																							'apindo_anggota_aktif',
																							'apindo_no_kontak',

																							),
																							)); ?>

																							<h4>Data BPJS</h4>
																							<?php $this->widget('zii.widgets.CDetailView', array(
																								'data'=>$model,
																								'htmlOptions'=>array("class"=>"table"),
																								'attributes'=>array(

																									'bpjs_ketenagakerjaan_wanita',
																									'bpjs_ketenagakerjaan_pria',
																									'bpjs_kesehatan_wanita',
																									'bpjs_kesehatan_pria',
																									
																									),
																									)); ?>

																									<h4>Data Koperasi Karyawan</h4>
																									<?php $this->widget('zii.widgets.CDetailView', array(
																										'data'=>$model,
																										'htmlOptions'=>array("class"=>"table"),
																										'attributes'=>array(

																											'kopkar_badan_hukum',
																											'kopkar_tidak_badan_hukum',
																											'keterangan',
																											),
																											)); ?>

																									<STYLE>
																										th{width:250px;}
																									</STYLE>

