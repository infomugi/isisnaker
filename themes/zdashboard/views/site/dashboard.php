<?php
/* @var $this SiteController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle='Dashboard';

//Statistik
$total_pekerja_wni =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tki_wanita + jumlah_tki_pria + jumlah_tka_wanita + jumlah_tka_pria) FROM perusahaan")->queryScalar();
$total_serikat =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM serikat")->queryScalar();
$total_perusahaan =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM perusahaan")->queryScalar();
$total_sektor =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM industri")->queryScalar();

//Jumlah Tenaga Kerja
$jumlah_tki_wanita =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tki_wanita) FROM perusahaan")->queryScalar();
$jumlah_tki_pria =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tki_pria) FROM perusahaan")->queryScalar();
$jumlah_tka_wanita =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tka_wanita) FROM perusahaan")->queryScalar();
$jumlah_tka_pria =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tka_pria) FROM perusahaan")->queryScalar();

//BPJS
$bpjs_ketenagakerjaan_wanita =  Yii::app()->db->createCommand("SELECT SUM(bpjs_ketenagakerjaan_wanita) FROM perusahaan")->queryScalar();
$bpjs_ketenagakerjaan_pria =  Yii::app()->db->createCommand("SELECT SUM(bpjs_ketenagakerjaan_pria) FROM perusahaan")->queryScalar();
$bpjs_kesehatan_wanita =  Yii::app()->db->createCommand("SELECT SUM(bpjs_kesehatan_wanita) FROM perusahaan")->queryScalar();
$bpjs_kesehatan_pria =  Yii::app()->db->createCommand("SELECT SUM(bpjs_kesehatan_pria) FROM perusahaan")->queryScalar();

//BPJS
$perorangan =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='Perorangan' || jenis_pemodalan='Perseorangan' ")->queryScalar();
$pmdn =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='PMDN'")->queryScalar();
$pma =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='PMA'")->queryScalar();
$swasta_nasional =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='Swasta Nasional'")->queryScalar();
$bumn =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='BUMN'")->queryScalar();
$koperasi =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='Koperasi'")->queryScalar();
$joinventure =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE jenis_pemodalan='Joint Venture' || jenis_pemodalan='Joint Vuture' ")->queryScalar();

$besar =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE klasifikasi='Besar'")->queryScalar();
$menengah =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE klasifikasi='Menengah'")->queryScalar();
$sedang =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE klasifikasi='Sedang'")->queryScalar();
$kecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE klasifikasi='Kecil'")->queryScalar();
$sangatkecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan WHERE klasifikasi='< Kecil'")->queryScalar();

?>

<div class="col-md-12">
	<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Statistik Ketenagakerjaan di Kab. Bandung</h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $total_pekerja_wni; ?>
						<span>Total Pekerja</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $total_serikat; ?>
						<span>Total Organisasi Serikat</span>
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $total_perusahaan; ?>
						<span>Total Perusahaan</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $total_sektor; ?>
						<span>Total Industri</span>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer clearfix">
			<span class="pull-left">
				Update Terakhir: <?php echo date('d-m-Y'); ?>
			</span>
		</div>
	</div>


	<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Laporan Tenaga Kerja di Kab. Bandung</h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $jumlah_tki_wanita; ?>
						<span>TKI Wanita</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $jumlah_tki_pria; ?>
						<span>TKI Pria</span>
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $jumlah_tka_wanita; ?>
						<span>TKA Wanita</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $jumlah_tka_pria; ?>
						<span>TKA Pria</span>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $bpjs_ketenagakerjaan_wanita; ?>
						<span>BPJS Ketenagakerjaan Wanita</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $bpjs_ketenagakerjaan_pria; ?>
						<span>BPJS Ketenagakerjaan Pria</span>
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $bpjs_kesehatan_wanita; ?>
						<span>BPJS Kesehatan Wanita</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $bpjs_kesehatan_pria; ?>
						<span>BPJS Kesehatan Pria</span>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer clearfix">
			<span class="pull-left">
				Update Terakhir: <?php echo date('d-m-Y'); ?>
			</span>
		</div>
	</div>


	<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Jenis Pemodalan Perusahaan di Kab. Bandung</h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $perorangan; ?>
						<span>Perorangan</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $pmdn; ?>
						<span>PMDN</span>
					</div>
				</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $pma; ?>
						<span>PMA</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $swasta_nasional; ?>
						<span>Swasta Nasional</span>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="panel-data">
						<?php echo $bumn; ?>
						<span>BUMN</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="panel-data">
						<?php echo $koperasi; ?>
						<span>Koperasi</span>
					</div>
				</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="panel-data">
						<?php echo $joinventure; ?>
						<span>Join Venture</span>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer clearfix">
			<span class="pull-left">
				Update Terakhir: <?php echo date('d-m-Y'); ?>
			</span>
		</div>
	</div>


		<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Klasifikasi Perusahaan di Kab. Bandung</h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $besar; ?>
						<span>Besar</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $sedang; ?>
						<span>Sedang</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $menengah; ?>
						<span>Menengah</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $kecil; ?>
						<span>Kecil</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="panel-data">
						<?php echo $sangatkecil; ?>
						<span>< Kecil</span>
					</div>
				</div>

			</div>


		</div>
		<div class="panel-footer clearfix">
			<span class="pull-left">
				Update Terakhir: <?php echo date('d-m-Y'); ?>
			</span>
		</div>
	</div>

</div>