<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klui'); ?>
		<?php echo $form->textField($model,'klui',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pimpinan'); ?>
		<?php echo $form->textField($model,'pimpinan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kecamatan'); ?>
		<?php echo $form->textField($model,'kecamatan',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_usaha'); ?>
		<?php echo $form->textField($model,'jenis_usaha',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_pemodalan'); ?>
		<?php echo $form->textField($model,'jenis_pemodalan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_tki_wanita'); ?>
		<?php echo $form->textField($model,'jumlah_tki_wanita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_tki_pria'); ?>
		<?php echo $form->textField($model,'jumlah_tki_pria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_tka_wanita'); ?>
		<?php echo $form->textField($model,'jumlah_tka_wanita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_tka_pria'); ?>
		<?php echo $form->textField($model,'jumlah_tka_pria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klasifikasi'); ?>
		<?php echo $form->textField($model,'klasifikasi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perusahaan_mulai_berlaku'); ?>
		<?php echo $form->textField($model,'perusahaan_mulai_berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perusahaan_akhir_berlaku'); ?>
		<?php echo $form->textField($model,'perusahaan_akhir_berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perusahaan_nomor_sk'); ?>
		<?php echo $form->textField($model,'perusahaan_nomor_sk',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serikat_nama'); ?>
		<?php echo $form->textField($model,'serikat_nama',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serikat_nomor'); ?>
		<?php echo $form->textField($model,'serikat_nomor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serikat_jumlah_wanita'); ?>
		<?php echo $form->textField($model,'serikat_jumlah_wanita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serikat_jumlah_pria'); ?>
		<?php echo $form->textField($model,'serikat_jumlah_pria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serikat_ketua'); ?>
		<?php echo $form->textField($model,'serikat_ketua',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bipartit_nomor'); ?>
		<?php echo $form->textField($model,'bipartit_nomor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bipartit_mulai_berlaku'); ?>
		<?php echo $form->textField($model,'bipartit_mulai_berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bipartit_akhir_berlaku'); ?>
		<?php echo $form->textField($model,'bipartit_akhir_berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apindo_anggota_aktif'); ?>
		<?php echo $form->textField($model,'apindo_anggota_aktif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apindo_no_kontak'); ?>
		<?php echo $form->textField($model,'apindo_no_kontak',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjs_ketenagakerjaan_wanita'); ?>
		<?php echo $form->textField($model,'bpjs_ketenagakerjaan_wanita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjs_ketenagakerjaan_pria'); ?>
		<?php echo $form->textField($model,'bpjs_ketenagakerjaan_pria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjs_kesehatan_wanita'); ?>
		<?php echo $form->textField($model,'bpjs_kesehatan_wanita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bpjs_kesehatan_pria'); ?>
		<?php echo $form->textField($model,'bpjs_kesehatan_pria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kopkar_badan_hukum'); ?>
		<?php echo $form->textField($model,'kopkar_badan_hukum',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kopkar_tidak_badan_hukum'); ?>
		<?php echo $form->textField($model,'kopkar_tidak_badan_hukum',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
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