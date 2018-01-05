<?php 
namespace app\controllers;
use app\models\Category;
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
		// $post = TestForm::findOne(2);
		// $post->email = 'new@mail.com';
		// $post->save();
                
  //      	$post->delete();
  //       TestForm::deleteAll(['>','id',3]); 
  //       TestForm::deleteAll(); 

		$model = new TestForm();
		// $model->name = 'Автор';
		// $model->email = '';
		// $model->text = 'Hello!';
		// $model->save();


		if($model->load(Yii::$app->request->post()))
		{
			if ( $model->save () ) {
				Yii::$app->session->setFlash('success','Data eccecpted!');
				return $this->refresh();
			}else{
				Yii::$app->session->setFlash('error','Data declined!');
				
			}
		}

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

		//$cats = Category::find()->all();
		//$cats = Category::find()->orderBy(['id'=>'SORT_DESC'])->all();
		//$cats = Category::find()->asArray()->where('parent=691')->all();

		$cats = Category::find()->with('products')->all();

		return $this->render('show', compact('cats'));
	}
}