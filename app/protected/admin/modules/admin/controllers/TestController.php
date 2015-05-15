<?php


class TestController extends CController
{
	

	public function actionIndex()
	{
		echo __CLASS__;
	}

	public function actionInfo()
	{
		phpinfo();
	}
}