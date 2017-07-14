<?php
/* @var $this PencarikerjaController */
/* @var $model Pencarikerja */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-9"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'pencarikerja-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomor'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomor'); ?>
					<?php echo $form->textField($model,'nomor',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggal'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggal'); ?>
					<?php echo $form->textField($model,'tanggal',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomorpencaker'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomorpencaker'); ?>
					<?php echo $form->textField($model,'nomorpencaker',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomorktp'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomorktp'); ?>
					<?php echo $form->textField($model,'nomorktp',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nama'); ?>
					<?php echo $form->textField($model,'nama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tempattanggallahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tempattanggallahir'); ?>
					<?php echo $form->textField($model,'tempattanggallahir',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tanggallahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tanggallahir'); ?>
					<?php echo $form->textField($model,'tanggallahir',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jeniskelamin'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jeniskelamin'); ?>
					<?php echo $form->textField($model,'jeniskelamin',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status'); ?>
					<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'agama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'agama'); ?>
					<?php echo $form->textField($model,'agama',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alamat'); ?>
					<?php echo $form->textArea($model,'alamat',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kecamatan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kecamatan'); ?>
					<?php echo $form->textField($model,'kecamatan',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'sd'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'sd'); ?>
					<?php echo $form->textField($model,'sd',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'smp'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'smp'); ?>
					<?php echo $form->textField($model,'smp',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'sma'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'sma'); ?>
					<?php echo $form->textField($model,'sma',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'diploma'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'diploma'); ?>
					<?php echo $form->textField($model,'diploma',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'s1'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'s1'); ?>
					<?php echo $form->textField($model,'s1',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'s2'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'s2'); ?>
					<?php echo $form->textField($model,'s2',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tahunlulus'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tahunlulus'); ?>
					<?php echo $form->textField($model,'tahunlulus',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'almamater'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'almamater'); ?>
					<?php echo $form->textField($model,'almamater',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jurusan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jurusan'); ?>
					<?php echo $form->textField($model,'jurusan',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'ipk'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'ipk'); ?>
					<?php echo $form->textField($model,'ipk',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tb'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tb'); ?>
					<?php echo $form->textField($model,'tb',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bb'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bb'); ?>
					<?php echo $form->textField($model,'bb',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomorhp'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomorhp'); ?>
					<?php echo $form->textField($model,'nomorhp',array('class'=>'form-control')); ?>
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