<?php
/* @var $this Pencari KerjaController */
/* @var $model Pencari Kerja */

$this->breadcrumbs=array(
	'Pencari Kerjas'=>array('index'),
	'Kelola',
	);

$this->pageTitle='Kelola Pencari Kerja';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Tambah Pencari Kerja',
		array('tambah'),
		array('class' => 'btn btn-success btn-flat'));
		?>
		<?php echo CHtml::link('Daftar Pencari Kerja',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>
		<?php echo CHtml::link('Kelola Pencari Kerja',
			array('daftar'),
			array('class' => 'btn btn-success btn-flat'));
			?>			

			<HR>

				<?php

				$dataSD = Yii::app()->db->createCommand("SELECT count(sd) from pencarikerja where sd='SD' OR sd='MI'")->queryScalar();

				$dataSMPN = Yii::app()->db->createCommand("SELECT count(smp) from pencarikerja where smp='MT' OR smp='MTS' OR smp='PAKET B' OR smp='SMP' OR smp='SMPN'")->queryScalar();

				$dataSMA = Yii::app()->db->createCommand("SELECT count(sma) from pencarikerja where sma='MA' OR sma='MAN' OR sma='SMA' OR sma='SMAN' OR sma='SMPN' OR sma='PAKET C' OR sma='SMEA' OR sma='STM' OR sma='SMU' OR sma='SMK' OR sma='SMKN' OR sma='DII' OR sma='MTS' OR sma='SLTPN' OR sma='SMP'")->queryScalar();

				$dataDiploma = Yii::app()->db->createCommand("SELECT count(diploma) from pencarikerja where diploma='DI' OR diploma='DII' OR diploma='DIII' OR diploma='DIV'")->queryScalar();

				$dataS1 = Yii::app()->db->createCommand("SELECT count(s1) from pencarikerja where s1='SI' OR s1='S1'")->queryScalar();

				$dataS2 = Yii::app()->db->createCommand("SELECT count(s2) from pencarikerja where s2='SII' OR s2='S2' OR s2='3,4' OR s2='S2' OR s2='SI'")->queryScalar();

				//Januari

				$januariSD = Yii::app()->db->createCommand("SELECT count(sd) from pencarikerja where sd='SD' OR sd='MI'")->queryScalar();						
				$januariSMP = Yii::app()->db->createCommand("SELECT count(smp) from pencarikerja where smp='MT' OR smp='MTS' OR smp='PAKET B' OR smp='SMP' OR smp='SMPN'")->queryScalar();

				$januariSMA = Yii::app()->db->createCommand("SELECT count(sma) from pencarikerja where sma='MA' OR sma='MAN' OR sma='SMA' OR sma='SMAN' OR sma='SMPN' OR sma='PAKET C' OR sma='SMEA' OR sma='STM' OR sma='SMU' OR sma='SMK' OR sma='SMKN' OR sma='DII' OR sma='MTS' OR sma='SLTPN' OR sma='SMP'")->queryScalar();

				$januariDiploma = Yii::app()->db->createCommand("SELECT count(diploma) from pencarikerja where diploma='DI' OR diploma='DII' OR diploma='DIII' OR diploma='DIV'")->queryScalar();

				$januariS1 = Yii::app()->db->createCommand("SELECT count(s1) from pencarikerja where s1='SI' OR s1='S1'")->queryScalar();

				$januariS2 = Yii::app()->db->createCommand("SELECT count(s2) from pencarikerja where s2='SII' OR s2='S2' OR s2='3,4' OR s2='S2' OR s2='SI'")->queryScalar();	

				$januariAll = $januariSD + $januariSMP + $januariSMA + $januariDiploma + $januariS1 + $januariS2; 			
				?>


				<section class="process-section">
					<div class="container">
						<div class="row">

							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataSD; ?></div>
								<div class="text-box">
									<h4>SD</h4>
								</div>
							</div>

							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataSMPN; ?></div>
								<div class="text-box">
									<h4>SMPN</h4>
								</div>
							</div>	

							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataSMA; ?></div>
								<div class="text-box">
									<h4>SMA</h4>
								</div>
							</div>	

							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataDiploma; ?></div>
								<div class="text-box">
									<h4>Diploma</h4>
								</div>
							</div>		


							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataS1; ?></div>
								<div class="text-box">
									<h4>S1</h4>
								</div>
							</div>	


							<div class="col-md-2 data">
								<div class="icon-box"><?PHP echo $dataS2; ?></div>
								<div class="text-box">
									<h4>S2</h4>
								</div>
							</div>																																			

						</div>
					</div>
				</section>

				<TABLE class="table">
					<THEAD>
						<TD><b>No.</b></TD>
						<TD><b>Bulan</b></TD>
						<TD><b>Jumlah Pencari Kerja</b></TD>
						<TD><b>SD</b></TD>
						<TD><b>SMP</b></TD>
						<TD><b>SMA</b></TD>
						<TD><b>Diploma</b></TD>
						<TD><b>S1</b></TD>
						<TD><b>S2</b></TD>
						<TD><b>L</b></TD>
						<TD><b>P</b></TD>
					</THEAD>
					<TR>
						<TD>1.</TD>
						<TD>Januari</TD>
						<TD><?php echo $januariAll; ?></TD>
						<TD><?php echo $januariSD; ?></TD>
						<TD><?php echo $januariSMP; ?></TD>
						<TD><?php echo $januariSMA; ?></TD>
						<TD><?php echo $januariDiploma; ?></TD>
						<TD><?php echo $januariS1; ?></TD>
						<TD><?php echo $januariS2; ?></TD>
						<TD><?php echo 1; ?></TD>
						<TD><?php echo 2; ?></TD>
					</TR>					
				</TABLE>

				<style type="text/css">
					.data{margin-bottom: 15px;}
					.text-box{margin-top: 22px;}
					.icon-box{background: #000;}
					.process-section .icon-box{font-size: 20px;font-weight: 700;}
				</style>	



					</section>