<?php
/* @var $this UmpiController */
/* @var $model Umpi */

$this->breadcrumbs=array(
	'Umpis'=>array('index'),
	$model->kd_umpi=>array('view','id'=>$model->kd_umpi),
	'Update',
	);

	$this->pageTitle='Edit Umpi';
	?>

	<?php

	if(YII::app()->user->record->level==1){

		echo $this->renderPartial('_form_update', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));
	}else{
				echo $this->renderPartial('_form_update_tks', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));
	}
                                               ?>	
