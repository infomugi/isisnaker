<?php
/* @var $this RespondenController */
/* @var $model Responden */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-md-10"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'responden-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-success',
			'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
			)); ?>


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nomorkartukuning'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nomorkartukuning'); ?>
					<?php echo $form->textField($model,'nomorkartukuning',array('class'=>'form-control')); ?>
				</div>

			</div>  

			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'nik'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'nik'); ?>
					<?php echo $form->textField($model,'nik',array('class'=>'form-control')); ?>
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
					<?php echo $form->labelEx($model,'tempatlahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tempatlahir'); ?>
					<?php echo $form->textField($model,'tempatlahir',array('class'=>'form-control')); ?>
				</div>

			</div>  


			<div class="form-group">

				<div class="col-sm-4 control-label">
					<?php echo $form->labelEx($model,'tgllahir'); ?>
				</div>   

				<div class="col-sm-8">
					<?php echo $form->error($model,'tgllahir'); ?>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'options'=>array(
							'showAnim'=>'fold',
							),
						'model'=>$model,
						'attribute'=>'tgllahir',
						'value'=>Yii::app()->dateFormatter->format("dd-MM-yyyy",strtotime($model->tgllahir)),
						'htmlOptions'=>array(
							'class'=>'form-control',
							'tabindex'=>2
							),
						'options'=>array(
							'dateFormat' => 'd-mm-yy',
												'showAnim'=>'clip',//'drop','fold','slideDown','fadeIn','blind','bounce','clip','drop'
												'showButtonPanel'=>true,
												'changeMonth'=>true,
												'changeYear'=>true,
												'defaultDate'=>'+1w',
												),
						));
						?>
					</div>

				</div>  


				<div class="form-group">

					<div class="col-sm-4 control-label">
						<?php echo $form->labelEx($model,'jeniskelamin'); ?>
					</div>   

					<div class="col-sm-8">
						<?php echo $form->error($model,'jeniskelamin'); ?>
						<?php
						echo $form->radioButtonList($model,'jeniskelamin',
							array('1'=>'Laki-laki','0'=>'Perempuan'),
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

						<div class="col-sm-4 control-label">
							<?php echo $form->labelEx($model,'kd_statusnikah'); ?>
						</div>   

						<div class="col-sm-8">
							<?php echo $form->error($model,'kd_statusnikah'); ?>
							<?php 
							echo $form->radioButtonList($model, "kd_statusnikah",
								CHtml::listData(Statusnikah::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
									'id', 'nama'
									),
								array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

									) 
									); ?> 
								</div>

							</div>  


							<div class="form-group">

								<div class="col-sm-4 control-label">
									<?php echo $form->labelEx($model,'kd_agama'); ?>
								</div>   

								<div class="col-sm-8">
									<?php echo $form->error($model,'kd_agama'); ?>
									<?php 
									echo $form->radioButtonList($model, "kd_agama",
										CHtml::listData(Agama::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
											'id', 'nama'
											),
										array(
											'template'=>'{input}{label}',
											'separator'=>'',
											'labelOptions'=>array(
												'class'=>'minimal', 'style'=>'padding-right:20px;margin-left:5px'),

											) 
											); ?> 
										</div>

									</div>  

									<div class="form-group">

										<div class="col-sm-4 control-label">
											<?php echo $form->labelEx($model,'kd_kecamatan'); ?>
										</div>   

										<div class="col-sm-8">
											<?php echo $form->error($model,'kd_kecamatan'); ?>
											<?php                                   
											echo CHtml::dropDownList('kd_kecamatan','', 
												CHtml::listData(Kecamatan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
													'kd_kecamatan', 'nama'
													),
												array(
													'prompt'=>'-- Pilih Kecamatan --.',
													'class'=>'form-control selectz',
													'ajax' => array(
														'type'=>'POST', 
														'url'=>Yii::app()->createUrl('desa/data'), 
														'update'=>'#Pencaker_kd_desa', 
														'data'=>array('kd_kecamatan'=>'js:this.value'),
														))
												); 

												?>
											</div>

										</div>  

										<div class="form-group">

											<div class="col-sm-4 control-label">
												<?php echo $form->labelEx($model,'kd_desa'); ?>
											</div>   

											<div class="col-sm-8">
												<?php echo $form->error($model,'kd_desa'); ?>
												<?php echo $form->dropDownList($model, "kd_desa",
													array(),
													array("empty"=>"-- Pilih Desa --", 'class'=>'form-control')
													); ?> 
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
													<?php echo $form->labelEx($model,'kd_pendidikan'); ?>
												</div>   

												<div class="col-sm-8">
													<?php echo $form->error($model,'kd_pendidikan'); ?>
													<?php echo $form->dropDownList($model, "kd_pendidikan",
														CHtml::listData(Pendidikan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
															'id', 'nama'
															),
														array("empty"=>"-- Pilih Pendidikan --", 'class'=>'form-control')
														); ?> 
													</div>

												</div>  


												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'kd_jurusanpendidikan'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'kd_jurusanpendidikan'); ?>
																											<?php echo $form->dropDownList($model, "kd_jurusanpendidikan",
														CHtml::listData(Jurusan::model()->findAll(array('condition'=>'','order'=>'nama ASC')),
															'id', 'nama'
															),
														array("empty"=>"-- Pilih Jurusan --", 'class'=>'form-control')
														); ?> 
													</div>

												</div>  	
												
												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'instansi'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'instansi'); ?>
														<?php echo $form->textField($model,'instansi',array('class'=>'form-control')); ?>
													</div>

												</div>  

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'tahun'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'tahun'); ?>
														<?php echo $form->textField($model,'tahun',array('class'=>'form-control')); ?>
													</div>

												</div>  																																			

												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'telpongenggam'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'telpongenggam'); ?>
														<?php echo $form->textField($model,'telpongenggam',array('class'=>'form-control')); ?>
													</div>

												</div>  


												<div class="form-group">

													<div class="col-sm-4 control-label">
														<?php echo $form->labelEx($model,'email'); ?>
													</div>   

													<div class="col-sm-8">
														<?php echo $form->error($model,'email'); ?>
														<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
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


												<div class="col-sm-12">
													<div class="col-sm-4">
													</div>
													<div class="col-sm-8">
														<div class="col-sm-6">
															<div class="form-group">

																<div class="col-sm-4 control-label">
																	<?php echo $form->labelEx($model,'tb'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'tb'); ?>
																	<?php echo $form->textField($model,'tb',array('class'=>'form-control')); ?>
																</div>

															</div>  

														</div>
														<div class="col-sm-6">
															<div class="form-group">

																<div class="col-sm-4 control-label">
																	<?php echo $form->labelEx($model,'bb'); ?>
																</div>   

																<div class="col-sm-8">
																	<?php echo $form->error($model,'bb'); ?>
																	<?php echo $form->textField($model,'bb',array('class'=>'form-control')); ?>
																</div>

															</div>  
														</div>
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