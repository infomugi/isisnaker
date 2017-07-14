<?php
/* @var $this UmpiController */
/* @var $model Umpi */

$this->breadcrumbs=array(
	'Umpis'=>array('index'),
	'Tambah',
	);

	$this->pageTitle='Form Isian Data Tidak Bekerja';
	?>

<?php
	if(Yii::app()->user->getLevel()==1){
	echo $this->renderPartial('_form', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));
	}else{
	echo $this->renderPartial('_form_create', array('model'=>$model,
                                             'responden'=>$responden,
                                              'validatedrespondens'=>$validatedrespondens));		
	}
?>