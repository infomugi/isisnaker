<?php
/* @var $this Serikat PerusahaanController */
/* @var $model Serikat Perusahaan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'serikat-perusahaan-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'perusahaan_id'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'perusahaan_id'); ?>
					<?php echo $form->dropDownList($model, "perusahaan_id",
						CHtml::listData(Perusahaan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
							'id', 'nama','jenis_usaha'
							),
						array("empty"=>"-- Pilih Perusahaan --", 'class'=>'form-control select')
						); ?> 
					</div>

				</div>  

				
				

				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->