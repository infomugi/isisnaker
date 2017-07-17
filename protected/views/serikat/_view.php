<?php
/* @var $this SerikatController */
/* @var $data Serikat */

$total =  Yii::app()->db->createCommand("SELECT count(id_serikat_perusahaan) FROM serikat_perusahaan WHERE serikat_id=".$data->id."")->queryScalar();
$perusahaan =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan")->queryScalar();
$presentasi = $total * $perusahaan / 100;

?>

<li class="list-group-item row">
	<div class="milestone-date col-md-2 col-sm-2">
		<div class="milestone-date-container">
			<span class="milestone-day color-warning"><?php echo $total; ?></span>
			<span class="milestone-date-item">
				<ul class="list-unstyled">
					<li>Total Perusahaan</li>
				</ul>
			</span>
		</div>
	</div>

	<div class="milestone-item col-md-10 col-sm-10">
		<h3 class="milestone-title">
			<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
		</h3>
		<div class="task-meta">
			<span class="">Alamat / Kontak</span>
			<span class="task-date color-sucess"><?php echo CHtml::link(CHtml::encode($data->alamat), array('view', 'id'=>$data->id)); ?> / <?php echo CHtml::link(CHtml::encode($data->kontak), array('view', 'id'=>$data->id)); ?></span>
		</div>

		<div class="progress">
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $presentasi; ?>%;">
				<small>Total <?php echo $total; ?> ( <?php echo $presentasi; ?>% ) dari <?php echo $perusahaan; ?> Perusahaan</small>
			</div>
		</div>

	</div>


</li>

