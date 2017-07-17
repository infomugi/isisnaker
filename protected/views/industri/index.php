<?php
/* @var $this IndustriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Industri',
	);

$this->pageTitle='Daftar Industri';

$jumlah_sektor =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM Industri")->queryScalar();
$tidak_terdaftar =  Yii::app()->db->createCommand("SELECT COUNT(id) FROM perusahaan where jenis_usaha=''")->queryScalar();

?>


<?php echo CHtml::link('Tambah Industri',
	array('tambah'),
	array('class' => 'btn btn-success btn-flat'));
	?>
	<?php echo CHtml::link('Kelola Industri',
		array('kelola'),
		array('class' => 'btn btn-success btn-flat'));
		?>

		<HR>

			<div class="alert alert-warning">
				Total Sektor Industri di Kab. Bandung <b><?php echo $jumlah_sektor; ?></b> Industri, ada sekitar <b><?php echo $tidak_terdaftar; ?></b> Perusahaan tidak terdaftar.
			</div>

			<div class="milestone-list-container">
				<ul class="list-group milestone-list row no-margin">
					
					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						)); ?>

					</ul>
				</div>