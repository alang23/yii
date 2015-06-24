<?php
/**
*@用户登录
*
**/


class LoginController extends CController
{
	

	public function actionIndex()
	{
		//$this->render('index');
		if(!empty($_POST)){
			
			$username = $_POST['username'];
			/*
			$username = $_POST['username'];
			$passwd = $_POST['passwd'];
			
			$admin = new Admin();
			$admin->username = 'root';
			$admin->pawd = '123456';
			$admin->createtime = time();
			$admin->save();

			*/
			
			$admin=Admin::model()->find('username=:username', array(':username'=>$username));
			var_dump($admin);
			
		}else{
			
			$this->render('index');
		}
	}
}