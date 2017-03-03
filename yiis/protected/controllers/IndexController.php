<?php 
class IndexController extends Controller{
	
	public function actionIndex(){
		p(array('title'=>'heh'));
		$this->renderPartial('index');
	}
	
	
	public function actionAdd(){
		
		$this->renderPartial('add');
	}
	
	
	
	
	
	
	
	
	
}




?>