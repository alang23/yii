<?php


class MyController extends BaseController{
	

	public function actions()
	{
		return array(
			'update'=>'application.controllers.post.UpdateAction',
		);
	}

	public function actionIndex()
	{
		echo __CLASS__;
	}

	
}