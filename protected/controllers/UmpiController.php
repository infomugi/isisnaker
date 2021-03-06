<?php

class UmpiController extends Controller
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
				'actions'=>array('tambah','update','view','delete','kelola','daftar','view','print'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==1',
				),

			array('allow',
				'actions'=>array('tambah','update','view','delete','my','daftar','view','print','mydaftar'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getLevel()==2',
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
		$model=Umpi::model()->findByPk($id);
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Melihat Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,21,10,0,0);		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	public function actionPrint($id)
	{
		$this->layout = "print";
		$model=Umpi::model()->findByPk($id);
		Activities::model()->my(YII::app()->user->id,"Print Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,23,10,0,0);			
		$this->render('print',array(
			'model'=>$this->loadModel($id),
			));
	}	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	// public function actionTambah()
	// {
	// 	$model=new Umpi;

	// 	// Uncomment the following line if AJAX validation is needed
	// 	// $this->performAjaxValidation($model);

	// 	if(isset($_POST['Umpi']))
	// 	{
	// 		$model->attributes=$_POST['Umpi'];
	// 		$model->kd_operator = YII::app()->user->id;
	// 		$model->waktuupdate = date('Y-m-d h:i:s');
	// 		$model->ip_client = Yii::app()->request->getUserHostAddress();
	// 		if($model->save())
	// 			Yii::app()->user->setFlash('Success', 'Data UMPI '.$model->kd_umpi.' berhasil ditambahkan.');
	// 			$this->redirect(array('view','id'=>$model->kd_umpi));
	// 	}

	// 	$this->render('create',array(
	// 			'model'=>$model,
	// 		));

	// }

	public function actionTambah()
	{
		Yii::import('ext.multimodelform.MultiModelForm');

		$model = new Umpi;

		$responden = new Responden;
		$validatedrespondens = array();  //ensure an empty array

		if(isset($_POST['Umpi']))
		{
			$model->attributes=$_POST['Umpi'];
			$model->kd_operator = YII::app()->user->id;
			$model->kd_surveyor = YII::app()->user->id;
			$model->tks = YII::app()->user->id;
			$model->tglsensus = date('Y-m-d h:i:s');
			$model->waktuupdate = date('Y-m-d h:i:s');
			$model->ip_client = Yii::app()->request->getUserHostAddress();

            //validate detail before saving the master
			$detailOK = MultiModelForm::validate($responden,$validatedrespondens,$deleteItems);

			if ($detailOK && empty($validatedrespondens))
			{
				Yii::app()->user->setFlash('error','No detail submitted');
				$detailOK = false;
			}

			if(
				$detailOK &&
				$model->save()
				)
			{
				//the value for the foreign key 'groupid'
				$masterValues = array ('kd_umpi'=>$model->kd_umpi);

				if (MultiModelForm::save($responden,$validatedrespondens,$deleteItems,$masterValues))
					//$userid,$description,$activityid,$type,$point,$status
					Activities::model()->my(YII::app()->user->id,"Mencatat Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,22,5,2,0);	
					$this->redirect(array('view','id'=>$model->kd_umpi));
			}
		}
     	//die("detailOK=$detailOK");
		$this->render('create',array(
			'model'=>$model,
			'responden'=>$responden,
			'validatedrespondens' => $validatedrespondens,
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

		Yii::import('ext.multimodelform.MultiModelForm');

		$responden = new Responden;
		$validatedrespondens = array();  //ensure an empty array			

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Umpi']))
		{
			$model->attributes=$_POST['Umpi'];
			$model->waktuupdate = date('Y-m-d h:i:s');
			$model->ip_client = Yii::app()->request->getUserHostAddress();	


           //validate detail before saving the master
			$detailOK = MultiModelForm::validate($responden,$validatedrespondens,$deleteItems);

			if ($detailOK && empty($validatedrespondens))
			{
				Yii::app()->user->setFlash('error','No detail submitted');
				$detailOK = false;
			}

			if(
				$detailOK &&
				$model->save()
				)
			{
				//the value for the foreign key 'groupid'
				$masterValues = array ('kd_umpi'=>$model->kd_umpi);

				if (MultiModelForm::save($responden,$validatedrespondens,$deleteItems,$masterValues))

				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Merubah Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,24,10,1,0);
				$this->redirect(array('view','id'=>$model->kd_umpi));
		}
	}

		$this->render('update',array(
			'model'=>$model,
			'responden'=>$responden,
			'validatedrespondens' => $validatedrespondens,
			));
	}


	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=Umpi::model()->findByPk($id);
		//$userid,$description,$activityid,$type,$point,$status
		Activities::model()->my(YII::app()->user->id,"Menghapus Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,25,11,0,0);		
		$data=Responden::model()->findByAttributes(array('kd_umpi'=>$id));
		if($data==NULL){
			$this->loadModel($id)->delete();
		}
		$data->delete();
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('kelola'));
	}

	/**
	 * Lists all models.
	 */
	public function actionDaftar()
	{
		$dataProvider=new CActiveDataProvider('Umpi',array(
				'criteria'=>array(
					'order'=>'kd_umpi DESC'
					),
				'pagination'=>array(
					'pageSize'=>'10',
					)));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}


	public function actionMyDaftar()
	{
		$dataProvider=new CActiveDataProvider('Umpi',array(
				'criteria'=>array(
					'condition'=>'tks='.YII::app()->user->id,
					'order'=>'kd_umpi DESC'
					),
				'pagination'=>array(
					'pageSize'=>'10',
					)));

		$this->render('my_data',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	/**
	 * Manages all models.
	 */
	public function actionKelola()
	{
		$model=new Umpi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Umpi']))
			$model->attributes=$_GET['Umpi'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	public function actionMy()
	{
		$model=new Umpi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Umpi']))
			$model->attributes=$_GET['Umpi'];

		$this->render('my',array(
			'model'=>$model,
			));
	}	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Umpi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Umpi::model()->findByPk($id);
		if(Yii::app()->user->getLevel()==1){

			if($model===null)
				throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
			return $model;

		}else{

			if($model->kd_operator==YII::app()->user->id){

				if($model===null)
					throw new CHttpException(404,'Data yang anda cari kemungkinan telah dihapus.');
				return $model;

			}else{
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"403 - Tidak Diijinkan Melihat Data Keluarga tidak Bekerja, No KK : ".$model->no_kk,21,10,0,0);
				throw new CHttpException(403,'Anda tidak diijikan untuk melakukan aksi ini.');
			}

		}


	}

	/**
	 * Performs the AJAX validation.
	 * @param Umpi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='umpi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
