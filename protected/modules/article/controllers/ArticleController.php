<?php

class ArticleController extends Controller
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
			'rights', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */

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
		$model=new Article;
        $modelCat=new ArticleCat();
        $catlst=$modelCat->findAll(
            array(
                'select'=>'cat_name,cat_id,level,path_type,parent_id',
                'order'=>'path_type'
            )
        );
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
            $_POST['Article']['c_time']=time();
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(Yii::app()->createUrl('article/Article/index'));
		}

		$this->renderPartial('add',array(
			'model'=>$model,
            'catlst'=>$catlst,
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
        $modelCat=new ArticleCat();
        $catlst=$modelCat->findAll(
            array(
                'select'=>'cat_name,cat_id,level,path_type,parent_id',
                'order'=>'path_type'
            )
        );
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(Yii::app()->createUrl('article/Article/index'));
		}
		$this->renderPartial('edit',array(
			'model'=>$model,
            'catlst'=>$catlst,
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
			$this->redirect(Yii::app()->createUrl('article/Article/index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new Article;
        $count=$model->count();
        $pagesize=Yii::app()->params->pagesize ? Yii::app()->params['pagesize'] :2;
        $page=new Pagination($count,$pagesize);
        $sql="select a.*,b.cat_name from `{{article}}` AS a LEFT JOIN `{{article_cat}}` AS b ON a.cat_id=b.cat_id ORDER BY `article_id` DESC $page->limit";
        $articleinfo=$model->findAllBySql("$sql");
        $pagelist=$page->fpage(array(0,2,3,4,5,6,7,8));
		$this->renderPartial('lst',array('model'=>$model,'articleinfo'=>$articleinfo,'pagelist'=>$pagelist));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Article('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Article the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Article $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
