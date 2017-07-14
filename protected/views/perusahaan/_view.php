<?php
/* @var $this PerusahaanController */
/* @var $data Perusahaan */
?>

<div class="col-xs-12 col-md-6 col-lg-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$data,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						// 'id',
						'klui',
						'nama',
						'alamat',
						'pimpinan',
						'kecamatan',
						// 'jenis_usaha',
						// 'jenis_pemodalan',
						// 'jumlah_tki_wanita',
						// 'jumlah_tki_pria',
						// 'jumlah_tka_wanita',
						// 'jumlah_tka_pria',
						// 'klasifikasi',
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
						),
						)); ?>

					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
