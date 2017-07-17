<?php
/* @var $this IndustriController */
/* @var $data Industri */

$total =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where jenis_usaha='".$data->deskripsi."'")->queryScalar();

?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link("Kode Sektor - ".CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
				<br />

				
			</div>
			<div class="box-body">

		<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title"><?php echo $data->deskripsi; ?></h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel-data">
						<?php echo $total; ?>
						<span>Total Perusahaan ( <?php echo $data->deskripsi; ?> )</span>
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

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
