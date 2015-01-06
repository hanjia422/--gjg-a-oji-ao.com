<?php

class ArticleCatController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
    public $defaultAction='index';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
//	public function accessRules()
//	{
//		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('*'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
//		);
//	}

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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ArticleCat;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['ArticleCat']))
		{
            $_POST['ArticleCat']['cat_type']=1;
            $parent=$_POST['ArticleCat']['parent_id'];
            $level=$parent ? 1 : 0;
			$model->attributes=$_POST['ArticleCat'];
			if($model->save())
            {
                $id=Yii::app()->db->getLastInsertId();
                $path_type= $parent ? $parent.'-'.$id : $id;
                $sql="update `{{article_cat}}` set `path_type`='$path_type',`level`=$level WHERE `cat_id`=$id ";
                $cm=Yii::app()->db->createCommand($sql);
                if($cm->execute())
                    $this->redirect(Yii::app()->createUrl('article/ArticleCat/index'));
            }
		}
		$this->renderPartial('add',array(
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
		if(isset($_POST['ArticleCat']))
		{
            $_POST['ArticleCat']['path_type']=$_POST['ArticleCat']['parent_id']?$_POST['ArticleCat']['parent_id'].'-'.$id:$id;
            $_POST['ArticleCat']['level']=$_POST['ArticleCat']['parent_id'] ? 1 : 0;
			$model->attributes=$_POST['ArticleCat'];
			if($model->save())
				$this->redirect(Yii::app()->createUrl('article/ArticleCat/index'));
		}
		$this->renderPartial('edit',array(
			'model'=>$model,
            'id'=>$id,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

        $model=new ArticleCat();
        $res=$model->find("cat_id=$id");
        if($res->level==0){
            $url=Yii::app()->createUrl('article/ArticleCat/index');

            echo "<a href='$url'>不能删除顶级分类,点击返回</a>";
            return ;
        }
        $this->loadModel($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(Yii::app()->createUrl('article/ArticleCat/index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
//        $model=new ArticleCat;
//        $test=$model->findAll();
//		$dataProvider=new CActiveDataProvider('ArticleCat');'dataProvider'=>$dataProvider,
        $model= new ArticleCat();
        $sql="select `cat_name`,`cat_id`,`cat_desc`,`keywords`,`cat_type`,`level` from `{{article_cat}}` ORDER BY `path_type`";
        $catlst=$model->findAllBySql($sql);
        Yii::app()->memcache->set('catlst',$catlst);
		$this->renderPartial('lst',array(
            'catlst'=>$catlst,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ArticleCat('search');

		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ArticleCat']))
			$model->attributes=$_GET['ArticleCat'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ArticleCat the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ArticleCat::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ArticleCat $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-cat-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
