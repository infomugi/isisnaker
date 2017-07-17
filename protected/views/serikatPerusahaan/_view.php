<?php
/* @var $this SerikatPerusahaanController */
/* @var $data SerikatPerusahaan */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_serikat_perusahaan), array('view', 'id'=>$data->id_serikat_perusahaan)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('serikat_id')); ?>:</b>
	<?php echo CHtml::encode($data->serikat_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perusahaan_id')); ?>:</b>
	<?php echo CHtml::encode($data->perusahaan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
