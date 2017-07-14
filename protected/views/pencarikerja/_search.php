<?php
/* @var $this PencarikerjaController */
/* @var $model Pencarikerja */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pencarikerja'); ?>
		<?php echo $form->textField($model,'id_pencarikerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomorpencaker'); ?>
		<?php echo $form->textField($model,'nomorpencaker',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomorktp'); ?>
		<?php echo $form->textField($model,'nomorktp',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempattanggallahir'); ?>
		<?php echo $form->textField($model,'tempattanggallahir',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggallahir'); ?>
		<?php echo $form->textField($model,'tanggallahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jeniskelamin'); ?>
		<?php echo $form->textField($model,'jeniskelamin',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kecamatan'); ?>
		<?php echo $form->textField($model,'kecamatan',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sd'); ?>
		<?php echo $form->textField($model,'sd',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smp'); ?>
		<?php echo $form->textField($model,'smp',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sma'); ?>
		<?php echo $form->textField($model,'sma',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diploma'); ?>
		<?php echo $form->textField($model,'diploma',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s1'); ?>
		<?php echo $form->textField($model,'s1',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s2'); ?>
		<?php echo $form->textField($model,'s2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahunlulus'); ?>
		<?php echo $form->textField($model,'tahunlulus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almamater'); ?>
		<?php echo $form->textField($model,'almamater',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk'); ?>
		<?php echo $form->textField($model,'ipk',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tb'); ?>
		<?php echo $form->textField($model,'tb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bb'); ?>
		<?php echo $form->textField($model,'bb'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomorhp'); ?>
		<?php echo $form->textField($model,'nomorhp',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->