<?php
namespace app\denglu\Controller;

use think\Controller;

class Common extends Controller
{
	public function _initialize()
	{
		//parent::_initialize();
		if (cookie('username') != '') {
	            session('username', cookie('username'));
	        }

			if(session('username')=='')
			{
				return $this->fetch('login/login');
			}
	}
}