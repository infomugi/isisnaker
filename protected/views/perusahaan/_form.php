<?php
/* @var $this PerusahaanController */
/* @var $model Perusahaan */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-9 col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'perusahaan-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-danger',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'klui'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'klui'); ?>
					<?php echo $form->textField($model,'klui',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'alamat'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'alamat'); ?>
					<?php echo $form->textArea($model,'alamat',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'pimpinan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'pimpinan'); ?>
					<?php echo $form->textField($model,'pimpinan',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'jenis_usaha'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jenis_usaha'); ?>
					<?php echo $form->textField($model,'jenis_usaha',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jenis_pemodalan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jenis_pemodalan'); ?>
					<?php echo $form->textField($model,'jenis_pemodalan',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jumlah_tki_wanita'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jumlah_tki_wanita'); ?>
					<?php echo $form->textField($model,'jumlah_tki_wanita',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jumlah_tki_pria'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jumlah_tki_pria'); ?>
					<?php echo $form->textField($model,'jumlah_tki_pria',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jumlah_tka_wanita'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jumlah_tka_wanita'); ?>
					<?php echo $form->textField($model,'jumlah_tka_wanita',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'jumlah_tka_pria'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'jumlah_tka_pria'); ?>
					<?php echo $form->textField($model,'jumlah_tka_pria',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'klasifikasi'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'klasifikasi'); ?>
					<?php echo $form->textField($model,'klasifikasi',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'perusahaan_mulai_berlaku'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'perusahaan_mulai_berlaku'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'language'=>'id',
						'attribute'=>'perusahaan_mulai_berlaku',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->perusahaan_mulai_berlaku)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
							'language'=>'id',
							'showAnim'=>'drop',
							'showButtonPanel'=>true,
							'changeMonth'=>true,
							'yearRange'=>'1960:2000',
							'changeYear'=>true,
							'defaultDate'=>'+1w',
							),
						));
						?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'perusahaan_akhir_berlaku'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'perusahaan_akhir_berlaku'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model'=>$model,
						'language'=>'id',
						'attribute'=>'perusahaan_akhir_berlaku',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->perusahaan_akhir_berlaku)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
							'language'=>'id',
							'showAnim'=>'drop',
							'showButtonPanel'=>true,
							'changeMonth'=>true,
							'yearRange'=>'1960:2000',
							'changeYear'=>true,
							'defaultDate'=>'+1w',
							),
						));
						?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'perusahaan_nomor_sk'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'perusahaan_nomor_sk'); ?>
					<?php echo $form->textField($model,'perusahaan_nomor_sk',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'serikat_nama'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'serikat_nama'); ?>
					<?php echo $form->textField($model,'serikat_nama',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'serikat_nomor'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'serikat_nomor'); ?>
					<?php echo $form->textField($model,'serikat_nomor',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'serikat_jumlah_wanita'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'serikat_jumlah_wanita'); ?>
					<?php echo $form->textField($model,'serikat_jumlah_wanita',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'serikat_jumlah_pria'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'serikat_jumlah_pria'); ?>
					<?php echo $form->textField($model,'serikat_jumlah_pria',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'serikat_ketua'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'serikat_ketua'); ?>
					<?php echo $form->textField($model,'serikat_ketua',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bipartit_nomor'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bipartit_nomor'); ?>
					<?php echo $form->textField($model,'bipartit_nomor',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bipartit_mulai_berlaku'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bipartit_mulai_berlaku'); ?>
					<?php echo $form->textField($model,'bipartit_mulai_berlaku',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bipartit_akhir_berlaku'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bipartit_akhir_berlaku'); ?>
					<?php echo $form->textField($model,'bipartit_akhir_berlaku',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'apindo_anggota_aktif'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'apindo_anggota_aktif'); ?>
					<?php echo $form->textField($model,'apindo_anggota_aktif',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'apindo_no_kontak'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'apindo_no_kontak'); ?>
					<?php echo $form->textField($model,'apindo_no_kontak',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpjs_ketenagakerjaan_wanita'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpjs_ketenagakerjaan_wanita'); ?>
					<?php echo $form->textField($model,'bpjs_ketenagakerjaan_wanita',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpjs_ketenagakerjaan_pria'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpjs_ketenagakerjaan_pria'); ?>
					<?php echo $form->textField($model,'bpjs_ketenagakerjaan_pria',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpjs_kesehatan_wanita'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpjs_kesehatan_wanita'); ?>
					<?php echo $form->textField($model,'bpjs_kesehatan_wanita',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'bpjs_kesehatan_pria'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'bpjs_kesehatan_pria'); ?>
					<?php echo $form->textField($model,'bpjs_kesehatan_pria',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kopkar_badan_hukum'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kopkar_badan_hukum'); ?>
					<?php echo $form->textField($model,'kopkar_badan_hukum',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'kopkar_tidak_badan_hukum'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'kopkar_tidak_badan_hukum'); ?>
					<?php echo $form->textField($model,'kopkar_tidak_badan_hukum',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'keterangan'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'keterangan'); ?>
					<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
				</div>
				
			</div>  

			
			<div class="form-group">
				
				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'status'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'status'); ?>
					<?php
					echo $form->radioButtonList($model,'status',
						array('Aktif'=>'Aktif','Tidak Aktif'=>'Tidak Aktif'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

							)                              
						);
						?>
					</div>
					
				</div>  

				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info btn-flat pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->