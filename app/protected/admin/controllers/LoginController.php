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
			$passwd = $_POST['passwd'];
			echo $username;
			echo '<br/>';
			echo $passwd;
			
		}else{
			
			$this->render('index');
		}
	}
}