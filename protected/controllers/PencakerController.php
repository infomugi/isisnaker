<?php

class PencakerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','report','print'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),
			array('deny',
				'users'=>array('*'),
				),
			);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionPrint($id)
	{
		$this->layout = "print";
		$this->render('print',array(
			'model'=>$this->loadModel($id),
		));
	}	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTambah()
	{
		$model=new Pencaker;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pencaker']))
		{
			$model->attributes=$_POST['Pencaker'];

			//Diinput Oleh
			$model->kd_operator = YII::app()->user->id;
			$model->waktuupdate = date('Y-m-d h:i:s');				
					
			if($model->save())
				$this->redirect(array('view','id'=>$model->kd_pencaker));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pencaker']))
		{
			$model->attributes=$_POST['Pencaker'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->kd_pencaker));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionDaftar()
	{
		$dataProvider=new CActiveDataProvider('Pencaker');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionReport()
	{
		$dataProvider=new CActiveDataProvider('Pencaker',array(
				'criteria'=>array(
					'order'=>'nama ASC'
					),
				));

		$this->render('report',array(
			'dataProvider'=>$dataProvider,
		));
	}	

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		$model=new Pencaker('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pencaker']))
			$model->attributes=$_GET['Pencaker'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pencaker the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pencaker::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pencaker $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pencaker-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
