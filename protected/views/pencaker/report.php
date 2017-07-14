<?php
/* @var $this PencakerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pencakers',
	);

$this->pageTitle='Report Pencaker';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pencaker',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Kelola Pencaker',
			array('kelola'),
			array('class' => 'btn btn-success btn-flat'));
			?>

			<HR>
				<div class="pad margin no-print">
					<div class="alert alert-info" style="margin-bottom: 0!important;">
						<center>Lapora Berhasil di Generate, <b><a href="./Report Pencaker.xls"/>Download Report</a></b></center>
					</div>
				</div>

				<?php
				$this->widget('EExcelWriter', array(
					'dataProvider' => $dataProvider,
					'title'        => 'EExcelWriter',
					'stream'       => FALSE,
					'fileName'     => 'Laporan Pencaker.xls',
					'columns'      => array(

						'nama',
						'tempatlahir',
						'tgllahir',

						array(
							'header'=>'JK',
							'value'=>'$data->jeniskelamin == 0 ? "P" : "L"'
							),						

						array(
							'header'=>'Umur',
							'value'=>'Pencaker::model()->countBirth($data->tgllahir)'
							),

						array(
							'name'=>'kd_desa',
							'value'=>'$data->Desa->nama'
							),

						array(
							'name'=>'kd_pendidikan',
							'value'=>'$data->Pendidikan->nama'
							),

						array(
							'name'=>'kd_jurusanpendidikan',
							'value'=>'$data->Jurusan->nama'
							),

						'telpongenggam',
						'alamat',

						),
					));
					?>

				</section>