<?php 
namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{
	public $layout = 'basic';

	public  function beforeAction($action)
	{
		if ($action->id == 'index'){
			$this->enableCsrfValidation = false;
		}

		return true;
	}

	public function actionIndex()
	{
		
		if(Yii::$app->request->isAjax)
		{
			debug(Yii::$app->request->post());
			return 'test';
		}

		$model = new TestForm();

		$this->view->title = 'Статті';
		return $this->render('test',compact('model'));
	}

	public function actionShow()
	{
		$this->view->title = 'Одна стаття';
		
		$this->view->registerMetaTag([
			'name' => 'keywords',
			'content' => 'keywords........'
		]);

		$this->view->registerMetaTag([
			'name' => 'description',
			'content' => 'description ......'
		]);
		return $this->render('show');
	}
}