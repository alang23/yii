<?php


class Admin extends CActiveRecord
{
	

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function tableName()
	{
		//return '{{admin}}'; //使用前缀
		return 'tbl_admin';   //使用全名
	}



}