<?php
/* @var $this KecamatanController */
/* @var $model Kecamatan */

$this->breadcrumbs=array(
	'Kecamatan'=>array('daftar'),
	$model->nama,
	);

	$this->pageTitle='Data Ketenagakerjaan Kecamatan - '.$model->nama;
	?>

<!-- 		<?php echo CHtml::link('List',
	 array('daftar'),
 array('class' => 'btn btn-success btn-flat', 'title'=>'Daftar Kecamatan'));
		 ?>
		<?php echo CHtml::link('Kelola',
	 array('kelola'),
 array('class' => 'btn btn-success btn-flat','title'=>'Kelola Kecamatan'));
		 ?>

		<HR> -->


<?php 
//Jumlah Tenaga Kerja
$jumlah_tki_wanita =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tki_wanita) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$jumlah_tki_pria =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tki_pria) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$jumlah_tka_wanita =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tka_wanita) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$jumlah_tka_pria =  Yii::app()->db->createCommand("SELECT SUM(jumlah_tka_pria) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();

//BPJS
$bpjs_ketenagakerjaan_wanita =  Yii::app()->db->createCommand("SELECT SUM(bpjs_ketenagakerjaan_wanita) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$bpjs_ketenagakerjaan_pria =  Yii::app()->db->createCommand("SELECT SUM(bpjs_ketenagakerjaan_pria) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$bpjs_kesehatan_wanita =  Yii::app()->db->createCommand("SELECT SUM(bpjs_kesehatan_wanita) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();
$bpjs_kesehatan_pria =  Yii::app()->db->createCommand("SELECT SUM(bpjs_kesehatan_pria) FROM perusahaan where kecamatan='".$model->nama."'")->queryScalar();

//BPJS
$perorangan =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='Perorangan' AND jenis_pemodalan='Perseorangan' ")->queryScalar();
$pmdn =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='PMDN'")->queryScalar();
$pma =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='PMA'")->queryScalar();
$swasta_nasional =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='Swasta Nasional'")->queryScalar();
$bumn =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='BUMN'")->queryScalar();
$koperasi =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='Koperasi'")->queryScalar();
$joinventure =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND jenis_pemodalan='Joint Venture' AND jenis_pemodalan='Joint Vuture' ")->queryScalar();

$besar =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND klasifikasi='Besar'")->queryScalar();
$menengah =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND klasifikasi='Menengah'")->queryScalar();
$sedang =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND klasifikasi='Sedang'")->queryScalar();
$kecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND klasifikasi='Kecil'")->queryScalar();
$sangatkecil =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where kecamatan='".$model->nama."' AND klasifikasi='< Kecil'")->queryScalar();
?>


<div class="col-md-12">
	<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Laporan Tenaga Kerja di Kecamatan <?php echo $model->nama; ?></h3>
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
		<h3 class="panel-title">Jenis Perusahaan di Kecamatan <?php echo $model->nama; ?></h3>
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
		<h3 class="panel-title">Klasifikasi Perusahaan di Kecamatan <?php echo $model->nama; ?></h3>
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




	<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'perusahaan-grid',
						'dataProvider'=>$dataProvider,
						'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
						'columns'=>array(

							array(
								'header'=>'No',
								'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
								'htmlOptions'=>array('width'=>'10px', 
									'style' => 'text-align: center;')),

							// 'klui',
							'nama',
							'perusahaan_nomor_sk',
							array('name'=>'perusahaan_mulai_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_mulai_berlaku)'),
							array('name'=>'perusahaan_akhir_berlaku','value'=>'Perusahaan::model()->tanggal($data->perusahaan_akhir_berlaku)'),

							'bipartit_nomor',
							array('name'=>'bipartit_mulai_berlaku','value'=>'Perusahaan::model()->tanggal($data->bipartit_mulai_berlaku)'),
							array('name'=>'bipartit_akhir_berlaku','value'=>'Perusahaan::model()->tanggal($data->bipartit_akhir_berlaku)'),

							// 'alamat',
							// 'kecamatan',
							// 'jenis_pemodalan',
							// 'klasifikasi',
							
						
							array(
								'class'=>'CButtonColumn',
								'template'=>'{view}',
								'buttons'=>array(
									'view'=>
									array(
										'url'=>'Yii::app()->createUrl("perusahaan/view", array("id"=>$data->id))',
										),
									),
								),
							),
							)); ?>



						