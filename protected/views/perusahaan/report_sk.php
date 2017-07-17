<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */

$this->breadcrumbs=array(
	'Perusahaan'=>array('daftar'),
	'Manage',
	);

$this->pageTitle='Manage Perusahaan';
?>

<span class="visible-xs">

	<?php echo CHtml::link('<i class="fa fa-plus"></i>',
		array('create'),
		array('class' => 'btn btn-success btn-md'));
		?>
		<?php echo CHtml::link('<i class="fa fa-tasks"></i>',
			array('index'),
			array('class' => 'btn btn-success btn-md'));
			?>

		</span> 

		<span class="hidden-xs">

			<?php echo CHtml::link('Add Perusahaan',
				array('create'),
				array('class' => 'btn btn-success btn-flat'));
				?>
				<?php echo CHtml::link('List Perusahaan',
					array('index'),
					array('class' => 'btn btn-success btn-flat'));
					?>

				</span>	

				<HR>

					<div class="pad margin no-print">
						<div class="alert alert-info" style="margin-bottom: 0!important;">
							<center>Laporan SK Perusahaan Berhasil di Buat ke Excel, <b><a href="./Laporan SK.xls"/>Download Laporan SK Perusahaan</a></b></center>
						</div>
					</div>

					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'perusahaan-grid',
						'dataProvider'=>$dataProvider,
						// 'filter'=>$model,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							'klui',
							'nama',
							// 'alamat',
							'kecamatan',
							// 'jenis_pemodalan',
							// 'klasifikasi',

							// 'id',
							// 'jenis_usaha',
							// 'pimpinan',
							// 'jumlah_tki_wanita',
							// 'jumlah_tki_pria',
							// 'jumlah_tka_wanita',
							// 'jumlah_tka_pria',
							'perusahaan_nomor_sk',
							array('name'=>'perusahaan_mulai_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_mulai_berlaku)'),
							array('name'=>'perusahaan_akhir_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_akhir_berlaku)'),
							array('header'=>'Status','value'=>'Perusahaan::model()->expire($data->perusahaan_akhir_berlaku)'),
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
										),
									),
								),
							),
							)); ?>

					<?php
					$this->widget('EExcelWriter', array(
						'dataProvider' => $dataProvider,
						'title'        => 'EExcelWriter',
						'stream'       => FALSE,
						'fileName'     => 'Laporan SK.xls',
						'columns'      => array(
							'nama',
							'alamat',
							'kecamatan',
							'perusahaan_nomor_sk',
							array('name'=>'perusahaan_mulai_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_mulai_berlaku)'),
							array('name'=>'perusahaan_akhir_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_akhir_berlaku)'),
							array('header'=>'Status','value'=>'Perusahaan::model()->expire($data->perusahaan_akhir_berlaku)'),
							),
						));
						?>