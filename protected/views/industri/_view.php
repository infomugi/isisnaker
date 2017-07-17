<?php
/* @var $this IndustriController */
/* @var $data Industri */

$total =  Yii::app()->db->createCommand("SELECT count(id) FROM perusahaan where jenis_usaha='".$data->deskripsi."'")->queryScalar();

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
			<?php echo CHtml::link(CHtml::encode($data->deskripsi), array('view', 'id'=>$data->id)); ?>
		</h3>
		<div class="task-meta">
			<span class="">Update Terakhir: <?php echo date('d-m-Y'); ?></span>
			<span class="task-date color-sucess">Kode Sektor <?php echo CHtml::link(CHtml::encode($data->nama . " - " . $data->deskripsi), array('view', 'id'=>$data->id)); ?></span>
		</div>

	</div>


</li>

