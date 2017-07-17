<?php
/* @var $this SerikatController */
/* @var $data Serikat */

$total =  Yii::app()->db->createCommand("SELECT count(id_serikat_perusahaan) FROM serikat_perusahaan WHERE serikat_id=".$data->id."")->queryScalar();

?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
				
			</div>

			<div class="box-body">

		<div class="panel panel-default panel-stats">
		<div class="panel-heading">
		<h3 class="panel-title">Serikat Pekerja <?php echo $data->nama; ?></h3>
		</div>
		<div class="panel-body no-padding">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="panel-data">
						<?php echo $total; ?>
						<span>Total Perusahaan Terasosiasi dengan ( <?php echo $data->nama; ?> )</span>
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
