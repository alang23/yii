<?php


class TestController extends BaseController
{


	public function actions()
    {
        return array(
            'edit'=>'application.controllers.post.UpdateAction',
        );
    }


	public function actionIndex()
	{
		echo 'hello';
	}
}