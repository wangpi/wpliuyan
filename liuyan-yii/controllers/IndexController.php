<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
use yii\data\Pagination;

class IndexController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex(){
		$model=new UserForm();
		$query = $model::find();
 		$countQuery = clone $query;
 		$pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>'3'
		]);
 		$models = $query->offset($pages->offset)
	     ->limit($pages->limit)
	     ->all();

		 return $this->render('index', [
		     'con' => $models,
		     'pages' => $pages,
		     'arr'=>$models,
		 ]);
	}
	public function actionDel(){
		$model=new UserForm();
		$id=$_GET['id'];
		$re = $model::findOne($id);
		$arr=$re->delete();
		if($arr){
    		echo "<script>alert('删除成功');location.href='index.php?r=index/index'</script>";
    	}else{
    		echo "<script>alert('删除失败');location.href='index.php?r=index/index'</script>";
    	}
	}
	public function actionAdd(){
		$model=new UserForm();
		$content=$_POST['content'];
		$time=date('Y-m-d H:i:s');
		$connection = \Yii::$app->db;
		$arr=$connection->createCommand()->insert('message', [
	    'content' => $content,
	    'addtime' => $time,
		])->execute();
		if($arr){
    		echo "<script>alert('添加成功');location.href='index.php?r=index/index'</script>";
    	}else{
    		echo "<script>alert('添加失败');location.href='index.php?r=index/index'</script>";
    	}
	}
	public function actionUpdate(){
		$model=new UserForm();
		$id=$_GET['id'];
		$arr = $model->find()->where(['id' =>$id])->asArray()->one();
		return $this->render('update',['arr'=>$arr]);
	}
	public function actionUpdata(){
		$model=new UserForm();
		$id=$_POST['id'];
		$time=date("Y-m-d H:i:s");
		$content=$_POST['content'];
		$customer = $model::findOne($id);
		$customer->content = $content; 
		$customer->addtime = $time;
		if($customer->save()){
			echo "<script>alert('修改成功');location.href='index.php?r=index/index'</script>";
		}else{
			echo "<script>alert('修改失败');location.href='index.php?r=index/index'</script>";
		}

	}
}