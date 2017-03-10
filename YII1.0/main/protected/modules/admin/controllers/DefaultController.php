<?php
define("TYPE_SALE",1);
class DefaultController extends Controller
{
	public function actionIndex()
	{

		//$this->render('index');	
	$a = yii::app()->db;	//todo:111111111
	var_dump($a);
	
	$sql = "select * from sss where type = ".TYPE_SALE;
	
	
	}
	
	
}
