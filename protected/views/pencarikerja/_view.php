<?php
/* @var $this PencarikerjaController */
/* @var $data Pencarikerja */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->nomorpencaker), array('view', 'id'=>$data->id_pencarikerja)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
				<?php echo CHtml::encode($data->nomor); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
				<?php echo CHtml::encode($data->tanggal); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nomorpencaker')); ?>:</b>
				<?php echo CHtml::encode($data->nomorpencaker); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nomorktp')); ?>:</b>
				<?php echo CHtml::encode($data->nomorktp); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
				<?php echo CHtml::encode($data->nama); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('tempattanggallahir')); ?>:</b>
				<?php echo CHtml::encode($data->tempattanggallahir); ?>
				<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggallahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggallahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jeniskelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jeniskelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sd')); ?>:</b>
	<?php echo CHtml::encode($data->sd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smp')); ?>:</b>
	<?php echo CHtml::encode($data->smp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sma')); ?>:</b>
	<?php echo CHtml::encode($data->sma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diploma')); ?>:</b>
	<?php echo CHtml::encode($data->diploma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s1')); ?>:</b>
	<?php echo CHtml::encode($data->s1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s2')); ?>:</b>
	<?php echo CHtml::encode($data->s2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahunlulus')); ?>:</b>
	<?php echo CHtml::encode($data->tahunlulus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almamater')); ?>:</b>
	<?php echo CHtml::encode($data->almamater); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk')); ?>:</b>
	<?php echo CHtml::encode($data->ipk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb')); ?>:</b>
	<?php echo CHtml::encode($data->tb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bb')); ?>:</b>
	<?php echo CHtml::encode($data->bb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomorhp')); ?>:</b>
	<?php echo CHtml::encode($data->nomorhp); ?>
	<br />

	*/ ?>
	

</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
