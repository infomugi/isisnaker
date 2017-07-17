<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
$this->pageTitle='Laporan Perusahaan';
?>

<div class="pad margin no-print">
	<div class="alert alert-info" style="margin-bottom: 0!important;">
		<center>Laporan Perusahaan Berhasil di Buat, <b><a href="./Laporan Perusahaan.xls"/>Download Laporan Perusahaan</a></b></center>
	</div>
</div>

<?php
$this->widget('EExcelWriter', array(
	'dataProvider' => $dataProvider,
	'title'        => 'EExcelWriter',
	'stream'       => FALSE,
	'fileName'     => 'Laporan Perusahaan.xls',
	'columns'      => array(
		'klui',
		'nama',
		'alamat',
		'kecamatan',
		'jenis_pemodalan',
		'klasifikasi',
		'jenis_usaha',
		'pimpinan',
		'jumlah_tki_wanita',
		'jumlah_tki_pria',
		'jumlah_tka_wanita',
		'jumlah_tka_pria',
		'perusahaan_mulai_berlaku',
		'perusahaan_akhir_berlaku',
		'perusahaan_nomor_sk',
		'serikat_nama',
		'serikat_nomor',
		'serikat_jumlah_wanita',
		'serikat_jumlah_pria',
		'serikat_ketua',
		'bipartit_nomor',
		'bipartit_mulai_berlaku',
		'bipartit_akhir_berlaku',
		'apindo_anggota_aktif',
		'apindo_no_kontak',
		'bpjs_ketenagakerjaan_wanita',
		'bpjs_ketenagakerjaan_pria',
		'bpjs_kesehatan_wanita',
		'bpjs_kesehatan_pria',
		'kopkar_badan_hukum',
		'kopkar_tidak_badan_hukum',
		'keterangan',
		),
	));
	?>
