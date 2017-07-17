<?php
/* @var $this Serikat PerusahaanController */
/* @var $model Serikat Perusahaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
		)); ?>

		<div class="row">
			<?php echo $form->label($model,'id_serikat_perusahaan'); ?>
			<?php echo $form->textField($model,'id_serikat_perusahaan'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'serikat_id'); ?>
			<?php echo $form->textField($model,'serikat_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'perusahaan_id'); ?>
			<?php echo $form->textField($model,'perusahaan_id'); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'status'); ?>
			<?php echo $form->textField($model,'status'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- search-form -->