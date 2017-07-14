<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaans'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Perusahaan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-primary btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-primary btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add Perusahaan',
				array('create'),
				array('class' => 'btn btn-primary btn-flat'));
				?>
				<?php echo CHtml::link('List Perusahaan',
					array('index'),
					array('class' => 'btn btn-primary btn-flat'));
					?>

				</span>	

				<HR>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'perusahaan-grid',
						'dataProvider'=>$model->search(),
						'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'id',
							'klui',
							'nama',
							'alamat',
							'kecamatan',
							// 'jenis_usaha',
							'jenis_pemodalan',
							'klasifikasi',
							
							// 'pimpinan',
							// 'jumlah_tki_wanita',
							// 'jumlah_tki_pria',
							// 'jumlah_tka_wanita',
							// 'jumlah_tka_pria',
							// 'perusahaan_mulai_berlaku',
							// 'perusahaan_akhir_berlaku',
							// 'perusahaan_nomor_sk',
							// 'serikat_nama',
							// 'serikat_nomor',
							// 'serikat_jumlah_wanita',
							// 'serikat_jumlah_pria',
							// 'serikat_ketua',
							// 'bipartit_nomor',
							// 'bipartit_mulai_berlaku',
							// 'bipartit_akhir_berlaku',
							// 'apindo_anggota_aktif',
							// 'apindo_no_kontak',
							// 'bpjs_ketenagakerjaan_wanita',
							// 'bpjs_ketenagakerjaan_pria',
							// 'bpjs_kesehatan_wanita',
							// 'bpjs_kesehatan_pria',
							// 'kopkar_badan_hukum',
							// 'kopkar_tidak_badan_hukum',
							// 'keterangan',
							// 'status',
							
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("Perusahaan/view", array("id"=>$data->id))',
										'options'=>array(
											'ajax'=>array(
												'type'=>'POST',
												'url'=>"js:$(this).attr('href')",
												'success'=>'function(data) { $("#viewModal .modal-body p").html(data); $("#viewModal").modal(); }'
												),
											),
										),
									),
								),
							),
							)); ?>



							<!-- Modal -->
							<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<!-- Popup Header -->
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h5 class="modal-title"><strong>Detail</strong> Perusahaan</h5>
										</div>
										<!-- Popup Content -->
										<div class="modal-body">
											<p>Details</p>
										</div>
										<!-- Popup Footer -->
										<div class="modal-footer">
											<BR>
												<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>


