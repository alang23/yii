<?php

class BaseController extends CController{
	


	public function __construct()
	{
		$this->checkLogin();
	}

	private function checkLogin()
	{
		echo __FUNCTION__;
	}
}