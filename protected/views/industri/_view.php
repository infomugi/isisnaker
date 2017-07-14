<?php
/* @var $this IndustriController */
/* @var $data Industri */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
				<?php echo CHtml::encode($data->nama); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
				<?php echo CHtml::encode($data->deskripsi); ?>
				<br />

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
